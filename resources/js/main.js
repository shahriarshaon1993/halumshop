function sidebarToggle() {
    var hamburger__menu = document.querySelector(".hamburger__menu");
    var close_btn = document.querySelector(".close-btn");
    var container = document.querySelector(".container");

    hamburger__menu.addEventListener("click", () => {
        container.classList.add("change");
    });

    close_btn.addEventListener("click", () => {
        container.classList.remove("change");
    });
}
sidebarToggle();
