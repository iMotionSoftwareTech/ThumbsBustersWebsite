function toggleResponsiveNavigation() {

    const navBar = document.getElementsByClassName("navbar")[0];
    const burgerButton = document.getElementsByClassName("icon")[0];

    if (navBar.classList.contains("responsive")) {
        navBar.classList.remove("responsive");
        burgerButton.setAttribute("aria-expanded", "false");
    } else {
        navBar.classList.add("responsive");
        burgerButton.setAttribute("aria-expanded", "true");
    }
}