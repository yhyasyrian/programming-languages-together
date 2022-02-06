<?php
$result = shell_exec("node main.js"); // first method
echo $result;
sleep(1);
echo "----------------\n";
$retval = $output = null;
exec("node main.js",$output,$result);
echo implode("\n",$output);
echo "\n"; // End File
