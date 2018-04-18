<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>

<?php

$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = $arr[2];

foreach ($arr as $value) {
    if ($value == $day) {
        echo "<i> {$value} </i><br>";
    } else {
        echo "{$value}<br>";
    }
}

?>