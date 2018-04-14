<?php
$a = rand(1,1000);
$b = rand(1,1000);
$operator = ['+'=>1, '-'=>2, '*'=>3, '/'=>4, '%'=>5];

print_r($a . array_rand($operator) . $b);
?>