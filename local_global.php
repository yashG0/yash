<?php

echo "<p>Welcome to my php Tute</p>";
$a = 345;
$b = 121;


function printValue(){
    // $a = 12;
    // $b = 21;
    global $a,$b;
    echo "<p>The Value of a is $a and b is $b </p>";
}

printValue();

?>