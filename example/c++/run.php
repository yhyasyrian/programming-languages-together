<?php
$result = shell_exec("g++ main.cpp && ./a.out"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("g++ main.cpp && ./a.out",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
