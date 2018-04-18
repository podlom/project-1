22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>

<?php

$a = 'x';

for ($i = 1; $i <= 5; $i++) {
    $a = $a . 'xx' ;
 echo "{$a}<br>";
}

?>