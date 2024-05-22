const navbarNav = document.querySelector(".navbar-nav");

// ketika menu di klik
document.querySelector("#Baju-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// di klik di luar side bar
document.addEventListener("click", (e) => {
  if (
    !document.querySelector("#Baju-menu").contains(e.target) &&
    !navbarNav.contains(e.target)
  ) {
    navbarNav.classList.remove("active");
  }
});

var icon = document.getElementById("icon");
icon.onclick = function(){
  document.body.classList.toggle("dark-theme")
  if(document.body.classList.contains(""));
}
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
