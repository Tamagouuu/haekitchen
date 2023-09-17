// RESPONSIVE COLUMN (HERO)

const responsive = window.matchMedia("(max-width: 992px)");
const textCol = document.querySelector(".text-container");
const imgCol = document.querySelector(".img-container");

function changeCol(e) {
  // Check if the media query is true
  if (e.matches) {
    textCol.classList.add("order-2");
    imgCol.classList.add("order-1");
  } else {
    textCol.classList.remove("order-2");
    imgCol.classList.remove("order-1");
  }
}

// Beri Event listener
responsive.addListener(changeCol);

// Cek diawal berapa ukuran awal layar dibuka
changeCol(responsive);

// -------------
