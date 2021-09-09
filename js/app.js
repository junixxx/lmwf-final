// Header Scroll Style

window.addEventListener("scroll", () => {
  let header = document.querySelector(".header");
  let windowsPosition = window.scrollY > 0;
  header.classList.toggle("header-active", windowsPosition);
});
// Mobile Menu

const mobileMenu = document.querySelector("#mobile-menu");
const navLinks = document.querySelector(".nav-links");

mobileMenu.addEventListener("click", () => {
  navLinks.classList.toggle("nav-active");
});

// Slider Styles

let sliderImage = document.querySelectorAll(".slide");
const arrowRight = document.querySelector("#arrowRight");
const arrowLeft = document.querySelector("#arrowLeft");
let current = 0;

function reset() {
  for (let i = 0; i < sliderImage.length; i++) {
    sliderImage[i].style.display = "none";
  }
}

function startSlide() {
  reset();
  sliderImage[0].style.display = "block";
}

function slideLeft() {
  reset();
  sliderImage[current - 1].style.display = "block";
  current--;
}
function slideRight() {
  reset();
  sliderImage[current + 1].style.display = "block";
  current++;
}

arrowLeft.addEventListener("click", () => {
  if (current === 0) {
    current = sliderImage.length;
  }
  slideLeft();
});
arrowRight.addEventListener("click", () => {
  if (current === sliderImage.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();

// Join Newsletter Script

const emailData = document.querySelector("#emailAddress");
const emailBtn = document.querySelector("#emailBtn");
const url =
  "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdFxG7eXMrujShLvyP31c92ur-u1mK5AVjSOv2chWduWmbM0A/formResponse";

const mainForm = document.querySelector("#mainForm");

mainForm.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(url, {
    method: "post",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    mode: "no-cors",
    body: `emailAddress=${emailData.value}`,
  }).then(() => {
    window.location.replace("thank-you");
  });
});
