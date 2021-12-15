<?php
$number = readline("Enter a Number");
$temp = 0;
for($i = 1;$i < $number; $i++){
    if($number % $i == 0){
        $temp = $temp + $i;
    }
}
if($number == $temp){
    echo $number." is a Perfect Number";
}
else{
    echo $number." is not a Perfect Number";
}
?>