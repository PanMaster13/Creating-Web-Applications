function displayString(){
	return document.write("<h1>Main Heading</h1>");
}
displayString();

document.write("Execute during page load from the head<br>");

function minus(x, y){
	ans = x - y;
	return document.write("The value of ", x, " minus ", y, " is: ", ans);
}

function times(x, y){
	ans = x * y;
	return document.write("The value of ", x, " minus ", y, " is: ", ans);
}

function divide(x, y){
	ans = x / y;
	return document.write("The value of ", x, " minus ", y, " is: ", ans);
}

function remainder(x, y){
	ans = x % y;
	return document.write("The remainder value of ", x, " minus ", y, " is: ", ans);
}