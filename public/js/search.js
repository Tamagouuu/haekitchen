// MENU PAGE (SEARCH)

const txtSearch = document.querySelector(".search-title");
const searchInput = document.querySelector(".search-input");

searchInput.addEventListener("focus", () => {
  txtSearch.classList.add("focus-input");
});

searchInput.addEventListener("blur", () => {
  txtSearch.classList.remove("focus-input");
});
