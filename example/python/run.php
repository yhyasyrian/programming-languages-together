<?php
$result = shell_exec("python3 main.py"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("python3 main.py",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
