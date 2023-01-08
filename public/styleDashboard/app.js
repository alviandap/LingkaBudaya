const hamburger_menu = document.querySelector(".hamburger-menu");
const navigasi = document.querySelector(".navigasi");

hamburger_menu.addEventListener("click", () => {
  navigasi.classList.toggle("active");
});
