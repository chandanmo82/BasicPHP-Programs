<?php
$number = readline("Enter The Number");
$flag = 1;
for($i = 2;$i <= $number/2;$i++){
    if ($number % $i == 0){
        $flag = 0;
        break;
    }
    else{
        $flag = 1;
    }
}
if ($flag == 1){
    echo $number . " is  a Prime Number";
}
else{
    echo $number . " is not a Prime Number";
}
?>