let button = document.querySelector(".top")


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

button.onclick = () => {
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}
