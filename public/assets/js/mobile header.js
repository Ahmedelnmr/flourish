let mobileView = document.querySelector(".mobile .links button");
let links = document.querySelector(".mobile .links ul");

mobileView.addEventListener("click",()=>{
    if (!links.classList.contains("height")) {
        links.classList.add("height")
    } else {
        links.classList.remove("height");
    }
})