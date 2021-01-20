var slideIndex = 1;//set the slideIndex to 1. (First picture)
showSlides(slideIndex);

function plusSlides(n) {// Next/previous controls
  showSlides(slideIndex += n);
}

function currentSlide(n) {// Thumbnail image controls
  showSlides(slideIndex = n);
}

function showSlides(n) {//call showSlides() to display the first image.
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) 
	{
	  slideIndex = 1
	}    //If the slideIndex is higher than the number of elements (slides.length), the slideIndex is set to zero.
	
  if (n < 1) 
	{
	  slideIndex = slides.length
	}//If the slideIndex is less than 1 it is set to number of elements (slides.length).
	
  for (i = 0; i < slides.length; i++) 
  {
      slides[i].style.display = "none"; //The showDiv() function hides (display="none") all elements with the class name "mySlides" 
  }
  
  for (i = 0; i < dots.length; i++) 
  {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex-1].style.display = "block";  //displays (display="block") the element with the given slideIndex.
  dots[slideIndex-1].className += " active";
}

function dropdownShowHide()
{
	document.getElementById("dropdown_content").classList.toggle("show");
}

