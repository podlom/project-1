<?php

$age = 29;

if ($age>=18 and $age<=59) {
    echo 'Вам еще работать и работать';
} elseif ($age>59) {
    echo 'Вам пора на пенсию';
} elseif ($age<18 and $age>0) {
    echo 'Вам еще рано работать';
} elseif (!is_numeric($age) || $age < 0) {
    echo 'Неизвестный возраст';
    }
?>