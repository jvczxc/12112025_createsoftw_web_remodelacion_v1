$ErrorActionPreference = "Stop"

function Translate-PhpConstants {
    param(
        [string]$Path,
        [string]$TargetLang
    )

    $lines = Get-Content -Path $Path -Encoding UTF8

    # Normalize accidental test placeholder if present.
    for ($k = 0; $k -lt $lines.Count; $k++) {
        $lines[$k] = $lines[$k].Replace('define("const_0001","TESTX");', 'define("const_0001","INICIO");')
    }

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
    Write-Output ("{0} => changed={1}; unique={2}" -f $Path, $changed, $cache.Count)
}

Translate-PhpConstants -Path "lang\\co.php" -TargetLang "ko"
Translate-PhpConstants -Path "lang\\fr.php" -TargetLang "fr"
Translate-PhpConstants -Path "lang\\it.php" -TargetLang "it"
Translate-PhpConstants -Path "lang\\pr.php" -TargetLang "pt"
Translate-PhpConstants -Path "lang\\rs.php" -TargetLang "ru"

# le.php requested range const_0001..const_0429: populate from english base.
$src = Get-Content -Path "ingles.php" -Encoding UTF8 | Where-Object { $_ -match '^\s*define\("const_' }
Set-Content -Path "lang\\le.php" -Value @("<?php") -Encoding UTF8
Add-Content -Path "lang\\le.php" -Value $src -Encoding UTF8

$leRaw = Get-Content -Path "lang\\le.php" -Raw -Encoding UTF8
Write-Output ("lang\\le.php => has_0001={0}; has_0429={1}" -f ($leRaw -match 'const_0001'), ($leRaw -match 'const_0429'))
