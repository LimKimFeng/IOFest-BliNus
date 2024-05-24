// Toggle menu on click
const navbarNav = document.querySelector(".navbar-nav");
document.querySelector("#Baju-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Close menu when clicking outside
document.addEventListener("click", (e) => {
  if (
    !document.querySelector("#Baju-menu").contains(e.target) &&
    !navbarNav.contains(e.target)
  ) {
    navbarNav.classList.remove("active");
  }
});

// Toggle dark theme and change icon href attribute
const icon = document.getElementById("icon");
icon.addEventListener("click", (e) => {
  // Prevent default click behavior
  event.preventDefault();

  // Toggle dark theme class on body
  document.body.classList.toggle("dark-theme");

  // Change icon href attribute based on current theme
  const iconEl = e.currentTarget.querySelector("use");
  if (iconEl.getAttribute("href") === "#terang") {
    iconEl.setAttribute("href", "#gelap");
  } else {
    iconEl.setAttribute("href", "#terang");
  }
});

// Slideshow functions
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  const slides = document.getElementsByClassName("mySlides");
  const dots = document.getElementsByClassName("dot");
  
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
