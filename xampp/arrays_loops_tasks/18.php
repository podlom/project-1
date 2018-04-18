<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>

<?php

$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

$a = $arr[5];
$b = $arr[6];

foreach ($arr as $value) {
    if ($value == $a || $value == $b) {
        echo "<strong> {$value} </strong><br>";
    } else {
        echo "{$value}<br>";
    }
}

?>