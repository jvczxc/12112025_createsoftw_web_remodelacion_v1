$ErrorActionPreference = "Stop"
$src = Get-Content -Path "lang\es.php" -Encoding UTF8 | Where-Object { $_ -match '^\s*define\("const_([0-3][0-9]{3}|04[0-1][0-9]|042[0-9])"' }
Set-Content -Path "lang\le.php" -Value @("<?php") -Encoding UTF8
Add-Content -Path "lang\le.php" -Value $src -Encoding UTF8
$raw = Get-Content -Path "lang\le.php" -Raw -Encoding UTF8
Write-Output ("le has0001=" + ($raw -match 'const_0001'))
Write-Output ("le has0429=" + ($raw -match 'const_0429'))
