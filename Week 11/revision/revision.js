function formValidation()
{
	var name = document.getElementById("name").value;
	var size = document.getElementsByName("size"); /* array form */
	var toppings = document.getElementsByClassName("topping"); /* array form */
	var delivery = document.getElementById("delivery").value;
	
	var sizeValidation = radioCheck(size);
	var toppingsValidation = radioCheck(toppings);
	
	var sizeText;
	var sizeList = sizeValidation[1];
	
	var toppingsList = toppingsValidation[1];
	var toppingsText = "";
	var i;
	
	sizeText = size[sizeList[0]].value;
	
	for (i = 0; i < toppingsList.length; i++)
	{
		toppingsText = toppingsText + toppings[toppingsList[i]].value + ",";
	}
	
	toppingsText = toppingsText.substring(",", toppingsText.length - 1);
	
	if ((sizeValidation[0] == true) && (toppingsValidation[0] == true))
	{
		alert("Name: " + name + "\nPizza Size: " + sizeText + "\nToppings: " + toppingsText + "\nDelivery Option: " + delivery);
	}
	
	else
	{
		alert("Please fill in the required form.");
	}

}

function radioCheck(array)
{
	var results = []
	var validation = false;
	var i = 0;
	var positions = [];
	
	for (i = 0; i < array.length; i++)
	{
		if (array[i].checked == true)
		{
			validation = true;
			positions.push(i);
		}
	}
	
	results[0] = validation;
	results[1] = positions;
	
	return results;
}