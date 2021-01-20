/*  Filename: validation.js
	Target html: register.html
	Author: Jason Ang Chia Wuen
	Date written: 19/4/2018 4:12pm
*/

var global_error_message = "";

function init1()
{
	var formName = document.getElementById("Form");
	formName.onsubmit = validateForm();
}

window.onload = init1;

function validateForm()
{
	var name_result = validateName();
	var email_result = validateEmail();
	var birthday_result = validateBirthday();
	var unit_tutor_result = validateUnitTutor();
	var issue_desc_result = validateIssue();
	var datetime_result = validateDateTime();
			
	if ((name_result  && email_result && birthday_result && unit_tutor_result && issue_desc_result && datetime_result) == true)
	{
		storeBooking();
	}
			
	else
	{
		alert(global_error_message);
	}
			
	return grandResult;
}
		
function storeBooking(firstname, email, birthday, tutor, description, p_date, p_time)
{
	sessionStorage.firstname = document.getElementById("name").value;
	sessionStorage.email = document.getElementById("email").value;
	sessionStorage.birthday = document.getElementById("dob").value;
	sessionStorage.unit1 = document.getElementById("cos10011").checked;
	sessionStorage.unit2 = document.getElementById("cos60004").checked;
	sessionStorage.unit3 = document.getElementById("cos60007").checked;
	sessionStorage.tutor = document.getElementById("tutor").value;
	sessionStorage.issue1 = document.getElementById("html").checked;
	sessionStorage.issue2 = document.getElementById("css").checked;
	sessionStorage.issue3 = document.getElementById("java").checked;
	sessionStorage.issue4 = document.getElementById("php").checked;
	sessionStorage.issue5 = document.getElementById("mysql").checked;
	sessionStorage.description = document.getElementById("description").value;
	sessionStorage.p_date = document.getElementById("date").value;
	sessionStorage.p_time = document.getElementById("time").value;
}
		
function validateName()
{
	var validationResult = false;
	var x = document.getElementById("name").value;
	if (x == "")
	{
		global_error_message = global_error_message + "Your name cannot be blank\n";
		validationResult = false;
	}
			
	else
	{
		validationResult = true;
	}
	return validationResult;
}
		
function validateEmail()
{
	var validationResult = false;
	var x = document.getElementById("email").value;
	var emailPattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
			
	if (emailPattern.test(x) == true)
	{
		validationResult = true;
	}
			
	else
	{
		validationResult = false;
		global_error_message = global_error_message + "Enter a valid email address\n";
	}
	return validationResult;
}
		
function validateBirthday()
{
	var validationResult = false;
	var x = document.getElementById("dob").value;
	var birthdayPattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
			
	if (birthdayPattern.test(x) == true)
	{
		validationResult = true;
	}
			
	else
	{
		validationResult = false;
		global_error_message = global_error_message + "Enter a valid date of birth in DD/MM/YYYY format\n";
	}
	return validationResult;
}
			
function validateUnitTutor()
{
	var unit1 = document.getElementById("cos10011").checked;
	var unit2 = document.getElementById("cos60004").checked;
	var unit3 = document.getElementById("cos60007").checked;
	var tutor = document.getElementById("tutor").value;
	var unittutor_result = false;

	if ((unit1 || unit2 || unit3) && tutor)
	{
		unittutor_result = true;
	}
			
	else
	{
		unittutor_result = false;
		global_error_message = global_error_message + "Choose your unit and respective tutor\n";
	}
	return unittutor_result;
}
		
function validateIssue()
{
	var issue1 = document.getElementById("html").checked;
	var issue2 = document.getElementById("css").checked;
	var issue3 = document.getElementById("java").checked;
	var issue4 = document.getElementById("php").checked;
	var issue5 = document.getElementById("mysql").checked;
	var description = document.getElementById("description").value;
	var issue_desc_result = false;

	if((issue1 || issue2 || issue3 || issue4 || issue5) && (description != ""))
	{
		issue_desc_result = true;
	}
			
	else
	{
		issue_desc_result = false;
		global_error_message = global_error_message + "Choose an issue and describe it\n";
	}
	return issue_desc_result;
}
		
function validateDateTime()
{
	var date = document.getElementById("date");
	var time = document.getElementById("time");
	var date_pattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
	var time_pattern = /^([0-9]{2}):([0-9]{2})$/;
	var datetime_result = false;

	if((date_pattern.test(date.value) == true) && (time_pattern.test(time.value) == true))
	{
		datetime_result = true;
	}
			
	else
	{
		datetime_result = false;
		global_error_message = global_error_message + "Enter a valid date and time in the correct format\n";
	}
	return datetime_result;
}
