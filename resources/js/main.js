window.addEventListener('scroll', function () {
    const header = document.querySelector('.header__main');
    header.classList.toggle('sticky', window.scrollY > 168);
});

document.querySelector(".hamburger-menu").addEventListener("click", () => {
  document.querySelector(".add_class").classList.toggle("change");
});
