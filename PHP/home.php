<?php
//php code here
#another single line comment
/*multi-line
comment*/
echo("Hello wolrd"); //used to output 

//Variables declaration
$firstName = "Clara";
$age = 14;

echo("Hello $firstName <br>");
echo("You are " .$age ." years old"); //period(.) used for cancatination

//Data types
$height = 12.3;
$school = false;
$students = [1,2,3,4];
$subject = array('ics', 'bbit', 'bcom');
$class = null;
echo var_dump($firstName); //Dumps into about the variable
echo var_dump($age);
echo var_dump($height)
echo var_dump($school);
echo var_dump($students);
echo var_dump($class);

//function without anyparameters(Does not take any values)
function getSum(){
	$num1 = 20;
	$num2 = 25;
	echo $num1 + $num2;
}
getSum(); //calling the function

//function with parameters
functin getProduct($num1,$num2){
	return $num1 * $num2;
}
$myProduct = getProduct(23,10);
echo "<h2>Your product is $myProduct</h2>";
//PHP can include HTML and JS code tihtin t and function appropriately

//conditional statements
if ($age == 18) {
	echo "The right age";
}
elseif (age > 18) {
	echo "Too old";
}
else {
	echo "Too young";
}

?>