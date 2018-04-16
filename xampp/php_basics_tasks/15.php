<?php

$a = rand(1,1000);
$b = rand(1,1000);
$operator = ['+'=>1, '-'=>2, '*'=>3, '/'=>4, '%'=>5];
$o = array_rand($operator);
print_r($a . $o . $b) . PHP_EOL;
eval("echo ' = '; \$r = \$a " . $o . " \$b ; echo \$r;");
