<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>


<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1,100);
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$max_arr = array_search(max($arr), $arr);
$min_arr = array_search(min($arr), $arr);
echo "{$arr[$max_arr]} <br>";
echo "{$arr[$min_arr]} <br>";


list($arr[$min_arr], $arr[$max_arr]) = [$arr[$max_arr], $arr[$min_arr]];
echo '<pre>';
print_r($arr);
echo '</pre>';

?>