const headerMenuContainer = document.getElementById("header_menu_container");
const headerMenuExpandBtn = document.getElementById("header_menu_expand_btn");
const headerMenuCloseBtn = document.getElementById("header_menu_close_btn");
const searchBarExpandBtn = headerMenuContainer.querySelector("#search_bar_expand_btn");
const searchBarContainer = headerMenuContainer.querySelector(".search_bar_container");



searchBarExpandBtn.addEventListener("click", ()=> {
    headerMenuContainer.classList.toggle("search_bar_expanded");
    if (headerMenuContainer.classList.contains("search_bar_expanded")) {
        window.addEventListener("click",  (e)=> {
            if (!searchBarContainer.contains(e.target)) {
                headerMenuContainer.classList.remove("search_bar_expanded");
            }
        })
    }
})



headerMenuExpandBtn.addEventListener("click", ()=> {
    headerMenuContainer.classList.add("active");
})

headerMenuCloseBtn.addEventListener("click", ()=> {
    headerMenuContainer.classList.remove("active");
})


