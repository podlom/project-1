<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>

<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "{$i}<br>";
    }
}

?>