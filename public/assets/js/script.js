let coursesButton = document.getElementById("button");
let dropdown = document.querySelector(".dropdown");
let nums = document.querySelectorAll(".about-details .num .count");
let aboutUs = document.getElementById("about");
let button = document.querySelector(".top")

// let courses = document.querySelector(".our-courses .courses");
// let isDragging = false, startX, startScrollLeft;

let started = false;
coursesButton.onclick =  ()=>{
    if (dropdown.classList.contains("hide")) {

        dropdown.classList.remove("hide");
    } else {
        dropdown.classList.add("hide");
    }
}
// console.log(nums[0].dataset.goal)
window.onscroll = () => {
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
}
function startCount(el) {
    let goal = el.dataset.goal
    let count = setInterval(()=> {
        el.textContent++
        if (el.textContent == goal) {
            clearInterval(count)
        }
    }, 5000 / goal)
}
startCount(nums)

// let arrow = document.querySelectorAll(".our-courses .arrow");
// let firstCourseWidth = courses.querySelector(".course").offsetWidth;
// let coursesChildern = [...courses.children];
// let content = document.querySelector(".courses-content")
// let coursePerView = Math.round(courses.offsetWidth / firstCourseWidth);

// coursesChildern.slice(-coursePerView).reverse().forEach(course => {
//     courses.insertAdjacentHTML("afterbegin", course.outerHTML);
// })

// coursesChildern.slice(0,coursePerView).forEach(course => {
//     courses.insertAdjacentHTML("beforeend", course.outerHTML);
// })

// courses.classList.add("no-transition");
// courses.scrollLeft = courses.offsetWidth;
// courses.classList.remove("no-transition");

// arrow.forEach(btn => {
//     btn.addEventListener("click", ()=> {
//         courses.scrollLeft += btn.id == "left" ? -firstCourseWidth : firstCourseWidth;
//     })
// })

// const infiniteScroll = () => {
//     // If the carousel is at the beginning, scroll to the end
//     if(courses.scrollLeft === 0) {
//         courses.classList.add("no-transition");
//         courses.scrollLeft = courses.scrollWidth - (2 * courses.offsetWidth);
//         courses.classList.remove("no-transition");
//     }
//     // If the carousel is at the end, scroll to the beginning
//     else if(Math.ceil(courses.scrollLeft) === courses.scrollWidth - courses.offsetWidth) {
//         courses.classList.add("no-transition");
//         courses.scrollLeft = courses.offsetWidth;
//         courses.classList.remove("no-transition");
//     }

//     // Clear existing timeout & start autoplay if mouse is not hovering over carousel
//     clearTimeout(timeoutId);
//     if(!content.matches(":hover")) autoPlay();
// }

// const autoPlay = () => {
//     if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
//     // Autoplay the carousel after every 2500 ms
//     timeoutId = setTimeout(() => courses.scrollLeft += firstCourseWidth, 2500);
// }
// autoPlay();


button.onclick = () => {
    window.scrollTo({
        top:0,
        behavior:"smooth"
    })
}
