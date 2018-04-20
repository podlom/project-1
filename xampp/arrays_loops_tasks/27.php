<?php
    
/*
27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
    Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
    в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
    В каждой ячейке должно находиться случайное число.
*/

$rows = rand(3,7);
$cols = rand(3,7);
$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];

echo '<table>';
for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $cols; $j++) {
        $color = $colors[array_rand($colors)];
        $a = rand();
        echo "<td style = 'background-color:{$color}'>{$a}</td>";

    }
    echo '</tr>';
}

echo '</table>';

?>
