let team = document.querySelector(".our-team .team");
let isDragging = false, startX, startScrollLeft;
let button = document.querySelector(".top")

let started = false;

window.onscroll = () => {
    // if (window.scrollY >= aboutUs.offsetTop - 150) {
    //     if (!started) {
    //         nums.forEach(num => startCount(num))
    //     }
    //     started = true;
    // }

    if (window.scrollY >= 400) {
        button.style.display = "block"
    } else {
        button.style.display = "none"
    }
}


let dragStart = (e)=> {
    isDragging = true
    team.classList.add("dragging")
    startX = e.pageX
    startScrollLeft = team.scrollLeft
}

let dragging = (e)=> {
    if (!isDragging) {
        return
    }
    team.scrollLeft = startScrollLeft - (e.pageX - startX)
}

let dragStop = ()=> {
    isDragging = false
    team.classList.remove("dragging")
}

team.addEventListener("mousedown", dragStart)
team.addEventListener("mousemove", dragging)
team.addEventListener("mouseup", dragStop)

let arrow = document.querySelectorAll(".our-team .arrow");
let firstMemberWidth = team.querySelector(".member").offsetWidth;
let content = document.querySelector(".team-content")

arrow.forEach(btn => {
    btn.addEventListener("click", ()=> {
        team.scrollLeft += btn.id == "left" ? -firstMemberWidth : firstMemberWidth;
    })
})

button.onclick = () => {
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}