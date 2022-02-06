<?php
$result = shell_exec("gcc main.c && ./a.out"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("gcc main.c && ./a.out",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
