window.addEventListener('scroll', function () {
    const header = document.querySelector('.header__main');
    header.classList.toggle('sticky', window.scrollY > 420);
});

