const siteNavbar = document.getElementById("site-navigation");
const headerMenuExpandBtn = document.getElementById("menu-hamburger");
const headerMenuCloseBtn = document.getElementById("header_menu_close_btn");
const searchBarExpandBtn = siteNavbar.querySelector("#search_bar_expand_btn");
const searchBarCLoseBtn = siteNavbar.querySelector("#search_view_close_btn");
const searchBarTab = siteNavbar.querySelector("#search_view_tab");



searchBarExpandBtn.addEventListener("click", () => {
    siteNavbar.classList.toggle("search_bar_expanded");
    if (siteNavbar.classList.contains("search_bar_expanded")) {
        window.addEventListener("click", (e) => {
            if (!siteNavbar.contains(e.target)) {
                siteNavbar.classList.remove("search_bar_expanded");
            }
        })
    }
})


searchBarCLoseBtn.addEventListener("click", () => {
    siteNavbar.classList.remove("search_bar_expanded");
})



headerMenuExpandBtn.addEventListener("click", () => {
    siteNavbar.classList.add("menu_expanded");
})

headerMenuCloseBtn.addEventListener("click", () => {
    siteNavbar.classList.remove("menu_expanded");
})


