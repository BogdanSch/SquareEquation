<?php

$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

$d = $b * $b - 4 * $a * $c;

if($d < 0){
    echo "<div style=\"color: red;\"> D < 0 <strong>There are no solutions!</strong></div>";
}
elseif($a == 0){
    $x = -$c / $b;

    echo "<div style=\"color: blue;\"> This is just equation <strong>x = $x </strong></div>";
}
elseif($d == 0){
    $x = sqrt($d) / (2 * $a);

    echo "<div style=\"color: blue;\"> D = 0 <strong>x = $x </strong></div>";
}
else{
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);

    echo "<div style=\"color: blue;\"> D > 0 <strong>x1 = $x1, \n x2 = $x2 </strong></div>";
}
