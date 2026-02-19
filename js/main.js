// BEFORE AFTER
const images = document.querySelectorAll(".carousel-track img");
const next = document.querySelector(".next");
const prev = document.querySelector(".prev");

let index = 0;

function showImage(i) {
  images.forEach((img) => img.classList.remove("active"));
  images[i].classList.add("active");
}

next.addEventListener("click", () => {
  index++;
  if (index >= images.length) index = 0;
  showImage(index);
});

prev.addEventListener("click", () => {
  index--;
  if (index < 0) index = images.length - 1;
  showImage(index);
});

// HEADER SCROLL

window.addEventListener("scroll", function () {
  const header = document.querySelector("header");

  if (window.scrollY > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});


const toggle = document.querySelector(".menu-toggle");
const menu = document.querySelector(".menu");

toggle.addEventListener("click", () => {
  menu.classList.toggle("show");
});