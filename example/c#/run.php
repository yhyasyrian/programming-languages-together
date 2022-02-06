<?php
$result = shell_exec("mono main.cs"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("mono main.cs",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
