$ErrorActionPreference = "Stop"
$path = "lang\al.php"
$lines = Get-Content -Path $path -Encoding UTF8
$cache = @{}
$changed = 0

function Translate-Text([string]$text) {
    if ([string]::IsNullOrWhiteSpace($text)) { return $text }
    if ($cache.ContainsKey($text)) { return $cache[$text] }

    $encoded = [System.Uri]::EscapeDataString($text)
    $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=de&dt=t&q=$encoded"

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

Set-Content -Path $path -Value $lines -Encoding UTF8
Write-Output ("CHANGED={0}" -f $changed)
Write-Output ("UNIQUE={0}" -f $cache.Count)
