var slideIndex = 1;

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  dots[slideIndex-1].className += " active";
}

//for menu icon animation
function menuBtnToggle(x) {
  x.classList.toggle("change");
}


function paneHover(x) {
  if (window.matchMedia("(min-width: 900px)").matches) {
// the view port is at least 900 pixels wide
x.style.backgroundColor = "rgb(230,230,230)";
} 
  
}

function paneHoverOut(x) {
  if (window.matchMedia("(min-width: 900px)").matches) {
// the view port is at least 900 pixels wide
x.style.backgroundColor = "whitesmoke";
} 
}


//for side menu animation
var checkNavOpen = 0;
function openOrCloseNav() {
  if (checkNavOpen == 0){
    document.getElementById("mySidenav").style.width = "250px";
    checkNavOpen = 1;
  } else if (checkNavOpen == 1){
    document.getElementById("mySidenav").style.width = "0";
    checkNavOpen = 0;
  }
}
