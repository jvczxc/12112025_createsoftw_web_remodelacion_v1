$ErrorActionPreference = "Stop"

function Translate-PhpConstants {
    param(
        [string]$Path,
        [string]$TargetLang
    )

    $lines = Get-Content -Path $Path -Encoding UTF8
    $cache = @{}
    $changed = 0

    function Translate-Text([string]$text) {
        if ([string]::IsNullOrWhiteSpace($text)) { return $text }
        if ($cache.ContainsKey($text)) { return $cache[$text] }

        $encoded = [System.Uri]::EscapeDataString($text)
        $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=$TargetLang&dt=t&q=$encoded"

        try {
            $raw = Invoke-WebRequest -Uri $url -UseBasicParsing -TimeoutSec 25
            $json = $raw.Content | ConvertFrom-Json
            $translated = ""
            foreach ($seg in $json[0]) {
                if ($seg -and $seg[0]) { $translated += [string]$seg[0] }
            }
            if ([string]::IsNullOrWhiteSpace($translated)) { $translated = $text }
        }
        catch {
            $translated = $text
        }

        $cache[$text] = $translated
        return $translated
    }

    for ($i = 0; $i -lt $lines.Count; $i++) {
        $line = $lines[$i]
        $m = [regex]::Match($line, '^(\s*define\("const_[^"]+",\s*")([^"]*)("\);\s*)$')
        if (-not $m.Success) { continue }

        $prefix = $m.Groups[1].Value
        $oldText = $m.Groups[2].Value
        $suffix = $m.Groups[3].Value

        $newText = Translate-Text $oldText
        if ($newText -ne $oldText) {
            $newText = $newText -replace '"', '\\"'
            $lines[$i] = $prefix + $newText + $suffix
            $changed++
        }
    }

    Set-Content -Path $Path -Value $lines -Encoding UTF8
    Write-Output ("{0}: CHANGED={1}; UNIQUE={2}" -f $Path, $changed, $cache.Count)
}

$jobs = @(
    @{ Path = "lang\\co.php"; Lang = "ko" },
    @{ Path = "lang\\fr.php"; Lang = "fr" },
    @{ Path = "lang\\it.php"; Lang = "it" },
    @{ Path = "lang\\pr.php"; Lang = "pt" },
    @{ Path = "lang\\rs.php"; Lang = "ru" }
)

foreach ($job in $jobs) {
    Translate-PhpConstants -Path $job.Path -TargetLang $job.Lang
}

# le.php: completar/seguir constantes 0001-0429 usando base en ingles.php
$sourceEnglish = "ingles.php"
$targetLe = "lang\\le.php"
$srcLines = Get-Content -Path $sourceEnglish -Encoding UTF8
$defs = $srcLines | Where-Object { $_ -match '^\s*define\("const_' }
Set-Content -Path $targetLe -Value @("<?php") -Encoding UTF8
Add-Content -Path $targetLe -Value $defs -Encoding UTF8

# Verificar rango solicitado en le.php
$leText = Get-Content -Path $targetLe -Raw -Encoding UTF8
$has0001 = $leText -match 'const_0001'
$has0429 = $leText -match 'const_0429'
Write-Output ("lang\\le.php: has_const_0001={0}; has_const_0429={1}" -f $has0001, $has0429)
