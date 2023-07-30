<?php
$x = 6 ;
$y = 4;
$sum = $x+$y;
$diff = $x - $y;
$mul = $x * $y;
$divi = $x / $y;
echo "sum = $sum" ;
echo '<br>';
echo "Difference = $diff" ;
echo '<br>';
echo "Product = $mul" ;
echo '<br>';
echo "Devision = $divi" ;
echo '<br>';

$num = 5;
while($num<=15){
    echo $num++;
    echo '<br>';
}

echo '<br>';

$unit = 100;
$payment = 0;
if($unit<=50){

    $payment = $unit * 3.50;
    echo "Amount = $payment";

}elseif($unit>50 && $unit<=100){
        $unit = $unit - 50;
        $payment = $unit * 4.00 + 50 * 3.50;
        echo "Amount = $payment";      
}elseif($unit>100 && $unit<=150){
    $unit = $unit - 100;
    $payment = $unit * 5.20 + 50 * 3.50 + 50 * 4.0;
    echo "Amount = $payment";    

}else{
    $unit = $unit - 150;
    $payment = $unit * 6.50 + 50 * 3.50 + 50 * 4.0 + 50 * 5.20 ;
    echo "Amount = $payment";  
}

echo '<br>';

$day = 5;

switch ($day) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Invalid number";
}

echo '<br>';

$fruits = ["Apple", "Banana", "Orange", "Mango", "Pineapple"];

foreach ($fruits as $fruit) {
  echo $fruit . "<br>";
}



?>