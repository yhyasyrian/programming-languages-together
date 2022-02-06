<?php
// It is preferable to use "csc" Alone, without printing the result
$result = shell_exec("csc main.cs && mono main.exe"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("csc main.cs && mono main.exe",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
