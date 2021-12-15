<?php
$number = readline("Enter a Number");
$fact = 1;
for($i=1;$i <= $number;$i++){
    $fact = $fact * $i ;
}
echo "The Factorial of $number is : " . $fact;
?>
