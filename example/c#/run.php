<?php
$result = shell_exec("mono main.exe"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("mono main.exe",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
