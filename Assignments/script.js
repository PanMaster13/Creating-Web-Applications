/* Javascript for product pages */
function getProduct1()
{
			sessionStorage.product = "1";
}

function getProduct2()
{
			sessionStorage.product = "2";
}

function getProduct3()
{
			sessionStorage.product = "3";
}

function getProduct4()
{
			sessionStorage.product = "4";
}

function getProduct5()
{
			sessionStorage.product = "5";
}

function getProduct6()
{
			sessionStorage.product = "6";
}

function getProduct7()
{
			sessionStorage.product = "7";
}

function getProduct8()
{
			sessionStorage.product = "8";
}

function getProduct9()
{
			sessionStorage.product = "9";
}

function getProduct10()
{
			sessionStorage.product = "10";
}

function getProduct11()
{
			sessionStorage.product = "11";
}

function getProduct12()
{
			sessionStorage.product = "12";
}

function getProduct13()
{
			sessionStorage.product = "13";
}

function getProduct14()
{
			sessionStorage.product = "14";
}

function getProduct15()
{
			sessionStorage.product = "15";
}

function getProduct16()
{
			sessionStorage.product = "16";
}

function getProduct17()
{
			sessionStorage.product = "17";
}

function getProduct18()
{
			sessionStorage.product = "18";
}

function getProduct19()
{
			sessionStorage.product = "19";
}

function getProduct20()
{
			sessionStorage.product = "20";
}

function getProduct21()
{
			sessionStorage.product = "21";
}

function getProduct22()
{
			sessionStorage.product = "22";
}

function getProduct23()
{
			sessionStorage.product = "23";
}

function getProduct24()
{
			sessionStorage.product = "24";
}

/* Javascript for enquiry page */
function windowLoad() /* Function that calls other functions when windows loads */
{
	createState();
	createProduct();
	preselectProduct();
}

window.onload = windowLoad;

var global_error_message = "";

function createState()
{
	var state = document.getElementById("state"),
	array = ["Kedah","Kelantan","Melaka","Negeri Sembilan","Pahang","Penang","Sabah","Sarawak","Selangor","Terengganu","Kuala Lumpur","Labuan","Putrajaya"];

	for(var i=0; i< array.length; i++)
	{
		var option = document.createElement("OPTION"),
		txt = document.createTextNode(array[i]);
		option.appendChild(txt);
		option.setAttribute("value",array[i]);
		state.insertBefore(option,state.lastChild);
	}
}

function createProduct()
{
	var product = document.getElementById("product");
	var array = ["DB9","One-77","Vanquish","Vantage","5-Series","7-Series","i8","X6","458","488","California","F12","Avendator","Gallardo","Huracan","Urus","911","Cayenne","Cayman","Panamera","Ghost","Limo","Phantom","Wraith"];

	for(var i=0; i < array.length; i++)
	{
		var content = array[i];
		var options = document.createElement("option");
		options.textContent = content;
		options.value = content;
		options.id = i+1
		product.appendChild(options);
	}
}
function preselectProduct()
{
	var product = sessionStorage.product;
	if (product == "1")
	{
		document.getElementById("1").selected = "true";
	}
	
	else if (product == "2")
	{
		document.getElementById("2").selected = "true";
	}
	
	else if (product == "3")
	{
		document.getElementById("3").selected = "true";
	}
	
	else if (product == "4")
	{
		document.getElementById("4").selected = "true";
	}
	
	else if (product == "5")
	{
		document.getElementById("5").selected = "true";
	}
	
	else if (product == "6")
	{
		document.getElementById("6").selected = "true";
	}
	
	else if (product == "7")
	{
		document.getElementById("7").selected = "true";
	}
	
	else if (product == "8")
	{
		document.getElementById("8").selected = "true";
	}
	
	else if (product == "9")
	{
		document.getElementById("9").selected = "true";
	}
	
	else if (product == "10")
	{
		document.getElementById("10").selected = "true";
	}
	
	else if (product == "11")
	{
		document.getElementById("11").selected = "true";
	}
	
	else if (product == "12")
	{
		document.getElementById("12").selected = "true";
	}
	
	else if (product == "13")
	{
		document.getElementById("13").selected = "true";
	}
	
	else if (product == "14")
	{
		document.getElementById("14").selected = "true";
	}
	
	else if (product == "15")
	{
		document.getElementById("15").selected = "true";
	}
	
	else if (product == "16")
	{
		document.getElementById("16").selected = "true";
	}
	
	else if (product == "17")
	{
		document.getElementById("17").selected = "true";
	}
	
	else if (product == "18")
	{
		document.getElementById("18").selected = "true";
	}
	
	else if (product == "19")
	{
		document.getElementById("19").selected = "true";
	}
	
	else if (product == "20")
	{
		document.getElementById("20").selected = "true";
	}
	
	else if (product == "21")
	{
		document.getElementById("21").selected = "true";
	}
	
	else if (product == "22")
	{
		document.getElementById("22").selected = "true";
	}
	
	else if (product == "23")
	{
		document.getElementById("23").selected = "true";
	}
	
	else if (product == "24")
	{
		document.getElementById("24").selected = "true";
	}
}

function storeBooking(firstname, lastname, email, phone, address, city, state, postcode, product, rdate, rduration, comment)
{
		sessionStorage.firstname = document.getElementById("fname").value;
		sessionStorage.lastname = document.getElementById("lname").value;
		sessionStorage.email = document.getElementById("email").value;
		sessionStorage.phone = document.getElementById("phone").value;
		sessionStorage.address = document.getElementById("address").value;
		sessionStorage.city = document.getElementById("city").value;
		sessionStorage.state = document.getElementById("state").value;
		sessionStorage.postcode = document.getElementById("postcode").value;
		sessionStorage.product = document.getElementById("product").value;
		sessionStorage.rdate = document.getElementById("rdate").value;
		sessionStorage.rduration = document.getElementById("rduration").value;
		sessionStorage.comment = document.getElementById("comment").value;
}
	
function validateFirstName()
{
			var validationResult = false;
			var x = document.getElementById("fname").value;
			var namePattern = /^[a-zA-Z]+$/;
			if (namePattern.test(x) == true)
			{
				validationResult = true;
			}
			
			else
			{
				global_error_message = global_error_message + "Only alphabets allowed for first name\n";
				validationResult = false;
			}
			
			return validationResult;
}
	
function validateLastName()
{
			var validationResult = false;
			var x = document.getElementById("lname").value;
			var namePattern = /^[a-zA-Z]+$/;
			if (namePattern.test(x) == true)
			{
				validationResult = true;
			}
			
			else
			{
				global_error_message = global_error_message + "Only alphabets allowed for last name\n";
				validationResult = false;
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
		
function validatePhoneNumber()
{
			var valdationResult = false;
			var x = document.getElementById("phone").value;
			var phonePattern = /^\d{10}$/;
			
			if (phonePattern.test(x) == true)
			{
				validationResult = true;
			}
			
			else
			{
				validationResult = false;
				global_error_message = global_error_message + "Phone number must be 10 digits\n";
			}
			return validationResult;
}
		
function validateAddress()
{
		var validationResult = false;
		var x = document.getElementById("address").value;
		
		if (x == "")
		{
			validationResult = false;
			global_error_message = global_error_message + "Your address cannot be blank\n";
		}
		
		else
		{
			validationResult = true;
		}
		return validationResult;
}
	
function validateCity()
{
		var validationResult = false;
		var x = document.getElementById("city").value;
		var cityPattern = /^[a-zA-Z]+$/;
		
		if (cityPattern.test(x) == true)
		{
			validationResult = true;
		}
		
		else
		{
			global_error_message = global_error_message + "Enter a valid city/town name\n";
			validationResult = false;
		}
		return validationResult;
}
		
function validatePostCode()
{
			var validationResult = false;
			var x = document.getElementById("postcode").value;
			var postCodePattern = /^\d{5}$/;
			
			if (postCodePattern.test(x) == true)
			{
				validationResult = true;
			}
			
			else
			{
				validationResult = false;
				global_error_message = global_error_message + "Postcode must be 5 digits\n";
			}
			return validationResult;
}
		
function validateRentalDate()
{
		var date = document.getElementById("rdate").value;
		var datePattern = /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
		var validationResult = false;
		
		if (datePattern.test(date) == true)
		{
			validationResult = true;
		}
		
		else
		{
			validationResult = false;
			global_error_message = global_error_message + "Enter a valid date in the correct format\n";
		}
		
		
		return validationResult;
}
	
function validateRentalDuration()
{
		var duration = document.getElementById("rduration").value;
		var durationPattern = /^\d+$/;
		var validationResult = false;
		
		if (durationPattern.test(duration) == true)
		{
			validationResult = true;
		}
		
		else
		{
			validationResult = false;
			global_error_message = global_error_message + "Enter a valid rental duration\n";
		}
		
		return validationResult;
}
	
function validateForm()
{
		var fname_result = validateFirstName();
		var lname_result = validateLastName();
		var email_result = validateEmail();
		var phone_result = validatePhoneNumber();
		var address_result = validateAddress();
		var city_result = validateCity();
		var postcode_result = validatePostCode();
		var rdate_result = validateRentalDate();
		var rduration_result = validateRentalDuration();
		
		var Form = document.getElementById("Form");

		if ((fname_result && lname_result && email_result && phone_result && address_result && city_result && postcode_result && rdate_result && rduration_result) == true)
		{
			storeBooking();
			Form.action("confirm.php");
		}
		
		else
		{
			alert(global_error_message);
			Form.action("enquiry.php");
		}
}

/* Javascript for confirm page */
function bookingConfirmed()
{
	alert("Your booking has been confirmed and submitted.");
}

function bookingCancelled()
{
	window.history.back();
}

function getBooking()
{
				document.getElementById("confirm_firstname").textContent = sessionStorage.firstname;
				document.getElementById("confirm_lastname").textContent = sessionStorage.lastname;
				document.getElementById("confirm_email").textContent = sessionStorage.email;
				document.getElementById("confirm_phone").textContent = sessionStorage.phone;
				document.getElementById("confirm_street").textContent = sessionStorage.address;
				document.getElementById("confirm_city").textContent = sessionStorage.city;
				document.getElementById("confirm_state").textContent = sessionStorage.state;
				document.getElementById("confirm_postcode").textContent = sessionStorage.postcode;
				document.getElementById("confirm_product").textContent = sessionStorage.product;
				document.getElementById("confirm_date").textContent = sessionStorage.rdate;
				document.getElementById("confirm_day").textContent = sessionStorage.rduration;
				document.getElementById("confirm_comment").textContent = sessionStorage.comment;
}
			
window.onload = getBooking();

