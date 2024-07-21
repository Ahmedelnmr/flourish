let nums = document.querySelectorAll(".about-details .num .count");
let aboutUs = document.getElementById("about");
let button = document.querySelector(".top")
let started = false;

window.addEventListener("scroll", ()=> {
    if (window.scrollY >= aboutUs.offsetTop - 150) {
        if (!started) {
            nums.forEach(num => startCount(num))
        }
        started = true;
    }
    
    if (window.scrollY >= 400) {
        button.style.display = "block"
    } else {
        button.style.display = "none"
    }
})


function startCount(el) {
    let goal = el.dataset.goal
    let count = setInterval(()=> {
        el.textContent++
        if (el.textContent == goal) {
            clearInterval(count)
        }
    }, 5000 / goal)
}

button.onclick = () => {
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}