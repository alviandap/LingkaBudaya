const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
});


const faq = document.querySelectorAll('.faq');

faq.forEach(faq => {
    faq.addEventListener('click', () =>{
        faq.classList.toggle("active");
    })
});

