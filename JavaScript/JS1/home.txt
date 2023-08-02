//Document Object Model
//accessing HTML elements
//-via id
let myPar = document.getElementById("mypar");
console.log(myPar);

//-via tag name
let allParagrapghs = document.getElementsByTagName("p");
console.log(allParagrapghs[1]); //stored as arrays and you can call to any index stored