<?php
$temp = readline("Enter Howmany number you want\n");
$n1 = 0;
$n2 = 1;
$number = 0;
echo "Fibonacci Series :\n";
echo $n1 ." ". $n2 ." ";
while ($number < ($temp-2)){
    $n3 = $n1 + $n2;
    echo $n3 . " ";
    $n1 = $n2;
    $n2 = $n3;
    $number++;
}
?>