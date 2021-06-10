var hamburger__menu = document.querySelector(".hamburger__menu");
var close_btn = document.querySelector(".close-btn");
var container = document.querySelector(".container");

hamburger__menu.addEventListener("click", () => {
    container.classList.add("change");
});

close_btn.addEventListener("click", () => {
    container.classList.remove("change");
});


const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx = document.querySelector('.login__container__formBx');
const login = document.querySelector('.login');

signupBtn.onclick = function() {
    formBx.classList.add('active');
    login.classList.add('active');
}

signinBtn.onclick = function() {
    formBx.classList.remove('active');
    login.classList.remove('active');
}
