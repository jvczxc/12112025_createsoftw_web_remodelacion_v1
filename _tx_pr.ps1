$ErrorActionPreference = "Stop"
$p = "lang\pr.php"
$lines = Get-Content -Path $p -Encoding UTF8
$cache = @{}
$changed = 0

function tr([string]$s) {
  if ([string]::IsNullOrWhiteSpace($s)) { return $s }
  if ($cache.ContainsKey($s)) { return $cache[$s] }
  $q = [System.Uri]::EscapeDataString($s)
  $u = "https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=pt&dt=t&q=$q"
  try {
    $r = Invoke-WebRequest -Uri $u -UseBasicParsing -TimeoutSec 25
    $j = $r.Content | ConvertFrom-Json
    $t = ""
    foreach ($seg in $j[0]) { if ($seg -and $seg[0]) { $t += [string]$seg[0] } }
    if ([string]::IsNullOrWhiteSpace($t)) { $t = $s }
  } catch {
    $t = $s
  }
  $cache[$s] = $t
  return $t
}

for ($i=0; $i -lt $lines.Count; $i++) {
  $m = [regex]::Match($lines[$i], '^(\s*define\("const_[^"]+",\s*")([^"]*)("\);\s*)$')
  if (-not $m.Success) { continue }
  $pre = $m.Groups[1].Value
  $old = $m.Groups[2].Value
  $post = $m.Groups[3].Value
  $new = tr $old
  if ($new -ne $old) {
    $new = $new -replace '"', '\\"'
    $lines[$i] = $pre + $new + $post
    $changed++
  }
}

Set-Content -Path $p -Value $lines -Encoding UTF8
Write-Output ("pr changed=" + $changed)
