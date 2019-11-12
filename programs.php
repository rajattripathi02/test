<?php

/**
* PRIME No - number should divided by 1 or itself
**/
$number = 31; 
for ($i = 2; $i <= $number/2; $i++){ 
	if ($number % $i == 0) 
		$prime = 0;
	else
		$prime = 1;
} 

if($prime == 1){
	echo "PRIME";
}

echo "<hr>";

/**
* Factorial - product of all degit till 1 = 3*2*1
**/

$num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial"; 

echo "<hr>";

/**
* armstrong - An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.
**/

$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
	$rem=$x%10;  
	$total=$total+$rem*$rem*$rem;  
	$x=$x/10;  
}  
if($num==$total)  
{  
	echo "Yes ".$num." it is an Armstrong number";  
}  
else  
{  
	echo "No ".$num." is not an armstrong number";  
}  

echo "<hr>";

/**
* Fibonacci - is the one in which you will get your next term by adding previous two numbers=> 0 1 1 3 4 7
**/
$num = 0;  
$n1 = 0;  
$n2 = 1;  

echo $n1.' '.$n2.' ';  
while ($num < 5 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1; 
}	


echo "<hr>";

/**
* Palindrome -  if it remains same even after reversing the digits or letters respectively. = 1441
**/
$number = 121;
$temp = $number;   
$new = 0;   
while (floor($temp)) {   
	$d = $temp % 10;   
	$new = $new * 10 + $d;   
	$temp = $temp/10;   
}   
if ($new == $number){   
	echo "Palindrome";
} 
else{ 
	echo  "Not Palindrome";
} 

echo "<hr>";

/**
* STAR
**/

for($i=0;$i<=5;$i++){  
	for($j=1;$j<=$i;$j++){  
		echo "* ";  
	}  
	echo "<br>";  
}  

echo '<h1>Algorithems<h1>';

// Bubble sort 

function bubbleSort(array $arr)
{
    $n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) {
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
     
    return $arr;
}
 
// Example Usage:
$arr = array(255,1,22,3,45,5);
$result = bubbleSort($arr);
echo "<h3>bubble sort<h3>";
echo "<pre>";print_r($result);

// Bubble Sort Improved
function bubbleSortImproved(array $arr)
{
    $n = sizeof($arr);   
    for ($i = 1; $i < $n; $i++) {
        $flag = false;
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }
     
    return $arr;
}
