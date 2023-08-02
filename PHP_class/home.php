<?php
//single line comment php code here
# single line comment
/* multiple
line comment */
$firstName = "Clara";
$age = 14;
$height = 12.3;
$school = false;
$students = [1,2,3,4];
$subjects = array('ics','bbit','bcom');
$class = null;

// echo var_dump($firstName);
// function without any parameters
function getSum()
{
	$num1 = 20;
	$num2 = 24;
	echo $num1 + $num2;
}

getSum();
getSum();
// function with parameters
function getProduct($num1,$num2){
	return $num1 * $num2;
}
$myProduct = getProduct(23,10);
echo "<h2>Your product is $myProduct</h2>";
// echo $num1;
//conditional statements
if ($age == 18){
	echo "The right age";
} elseif ($age > 18) {
	echo "Too old";
} else {
	echo "Too young";
}
// for loop
for ($i=1; $i<7; $i++){
	echo "This is round ".$i."<br>";
}
// arrays - Indexed array
$firstArray = array("John","Jane","Janet");
echo "<br>My name is ".$firstArray[1];

//associative array
$secondArray = array(
	'John'=> 14,
	'Jane'=> 15, 
	'Janet'=> 16
	);
echo "<br>She is ".$secondArray['Janet'];
//loop through array
foreach ($firstArray as $studentName){
	echo "<br>Your name is $studentName";
}
foreach ($secondArray as $name => $age){
	echo "<br>$name is $age years old";
}





/*
echo "<br>Hello world $firstName <br>";
echo "You are ".$age." years old";

*/

?>