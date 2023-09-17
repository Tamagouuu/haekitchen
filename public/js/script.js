// NAVBAR

const btn = document.querySelector(".navbar-toggler");
const icon = document.querySelector(".navbar-toggler-icon");

btn.addEventListener("click", () => {
  if (btn.classList.contains("collapsed")) {
    icon.style.backgroundImage = "url('/img/assets-web/collapse.svg')";
    icon.style.transition = "0.3s";
  } else {
    icon.style.backgroundImage = "url('/img/assets-web/close.svg')";
    icon.style.transition = "0.3s";
  }
});

window.addEventListener("scroll", () => {
  document.querySelector(".navbar").classList.toggle("scroll", window.scrollY > 30);
});

// PRODUCT CARD

const card = document.querySelectorAll(".card-product");
const cardTitle = document.querySelector(".card-title");
