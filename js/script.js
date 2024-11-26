const fullMenu = document.getElementById("full-menu");
const menuCross = document.getElementById("menuCross");
let active = false;

menuCross.addEventListener("click", () => {
    if (!active) {
        fullMenu.classList.add("full-page-menu-active");
        menuCross.classList.add("bars-container-active");
        active = !active
    } else {
        fullMenu.classList.remove("full-page-menu-active");
        menuCross.classList.remove("bars-container-active");
        active = !active
    }

})
