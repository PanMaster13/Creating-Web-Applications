/*  Filename: confirm.js
	Target html: confirm.html
	Author: Jason Ang Chia Wuen
	Date written: 19/4/2018 4:12pm
*/

function validate()
{
	var errMsg = "";
	var result = true;
		
	if (result == true)
	{
		alert("Booking Successfully");
	}
		
	else
	{
		alert("Booking Failed");
	}
		
	return result;
}

function getBooking()
{
	document.getElementById("confirm_name").textContent = sessionStorage.firstname;
	document.getElementById("confirm_email").textContent = sessionStorage.email;
	document.getElementById("confirm_dob").textContent = sessionStorage.birthday;
		
	var x = sessionStorage.unit1;
	var y = sessionStorage.unit2;
	var z = sessionStorage.unit3;

	if (x == "true")
	{
		document.getElementById("confirm_unit").textContent = "cos10011";
	}
		
	else if (y == "true")
	{
		document.getElementById("confirm_unit").textContent = "cos60004";
	}
		
	else if (z == "true")
	{
		document.getElementById("confirm_unit").textContent = "cos60007";
	}
		
	document.getElementById("confirm_tutor").textContent = sessionStorage.tutor;
		
	var a = sessionStorage.issue1;
	var b = sessionStorage.issue2;
	var c = sessionStorage.issue3;
	var d = sessionStorage.issue4;
	var e = sessionStorage.issue5;
		
	var html = "";
	var css = "";
	var java = "";
	var php = "";
	var mysql = "";
	
	if (a == "true")
	{
		html = "html ";
	}
		
	if (b == "true")
	{
		css = "css ";
	}
		
	if (c == "true")
	{
		java = "java ";
	}
		
	if (d == "true")
	{
		php = "php ";
	}
		
	if (e == "true")
	{
		mysql = "mysql ";
	}
		
	document.getElementById("confirm_issue").textContent = html + css + java + php + mysql;
	document.getElementById("confirm_description").textContent = sessionStorage.description;
	document.getElementById("confirm_date").textContent = sessionStorage.p_date;
	document.getElementById("confirm_time").textContent = sessionStorage.p_time;
}
	
function cancelBooking()
{
	window.location = "register.html";
}
	
function init()
{
	getBooking();
		
	var bookForm = document.getElementById("bookform");
	var cancelBooking = document.getElementById("cancelButton");
		
	if (bookForm == bookForm)
	{
		bookForm.onsubmit = validate();
	}
		
	else
	{
		cancelBooking.onclick = cancelBooking();
	}
}
window.onload = init();
