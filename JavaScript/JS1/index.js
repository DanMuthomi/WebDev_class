//Instead of writing the JS in HTML it can be in its own file then linked
console.log("Hello World External JavaScript");
//Single Line comment
/*Multi line
comment*/
//naming variables: eg. firstName
//datatypes: number, string, boolean, object, undefined, null
//declaring variable: let, var, const
{
	//let or const can be used to declare variables only available in a block of code
	//the rest can act as global
	let newVariable = 525; //block of code
}
//console.log(newVariable) //bring an error
//var is problematic as it can allor to declare variales with similar names in the code
let firstName; //undefined since no value set
var lastName = "Lara"; //string
const age = 24; //number(can be both whole and decimal //const must be set value set when declaring
let registration= true; //boolean
let school = null, classDetails = undefined;
console.log(typeof lastName);
lastName = 15;
console.log(typeof lastName);

let studentNames = ["Alice", "John", "Amina"]; //array
console.log(typeof studentNames)
console.log("The student is called " + studentNames[1]);
studentNames[1] = "Joel";
console.log("The student is called " + studentNames[1]);

//Object
//can have properties and methods
let unitDetails = {
	//properties of the object
	unitName: "Web Dev",
	unitTime: "Saturday",
	venue: "Masinga",
	//methods
	getUnitDetails: function(){
		console.log("This is " + this.unitName + " class. It happens on " + this.unitTime + " at " + this.venue);
	}
}
//calling the method
unitDetails.getUnitDetails();
//access object properties
console.log(unitDetails.unitName)

//Object2
let homeDetails = {
	//properties
	home: "Madaraka",
	streetAddress: 152,
	WiFi: true,

	//method
	getWiFi: function(){
		console.log("WiFi status: " + this.WiFi);
	}
}
// objectName.property
let homeInfo = homeDetails.home; // saving it on another variable
console.log(homeInfo);
// objectName.method
console.log(homeDetails.getWiFi());

//functions
function myFunction(){
	console.log("This is myFunction");
}
myFunction();

//function2
function getSum(){
	let num1 = 2, num2 = 8;
	return num1 + num2;
}
console.log(getSum());
let mySum = getSum();
console.log("My sum is ", mySum);

//function3 - with parameters
function getProduct(num1, num2){
	return num1 * num2;
}
console.log("My product is ", getProduct(10, 52));

//comparison operatora: >, <, ==, ===(equal in value and type), !=, >=, <=
//arithmetic operators: +, -, /, *, %
//logical operators: %%(and), ||(or)

//conditional statements
let studentMark = 45;
if (studentMark < 50){
	console.log("Fail");
}
else if (studentMark == 50){
	console.log("Average");
}
else {
	console.log("Pass");
}

//looping
for (let j=1; j<6; j++){
	myFunction();
	//escape characters
	console.log("\n");
}

//access the paragraph element
//DOM
//accessed though id which is unique
let myParagraph = document.getElementById("myParagraph");
console.log(myParagraph);

//getElementsByTagName
//getElementsByClassName