let courses = document.querySelector(".our-courses .courses");
let tracks = document.querySelector(".tracks-content .tracks-details");
let isDragging = false, startX, startScrollLeft;

// for courses

let dragStart1 = (e)=> {
    isDragging = true
    courses.classList.add("dragging")
    startX = e.pageX
    startScrollLeft = courses.scrollLeft
}

let dragging1 = (e)=> {
    if (!isDragging) {
        return
    }
    courses.scrollLeft = startScrollLeft - (e.pageX - startX)
}

let dragStop1 = ()=> {
    isDragging = false
    courses.classList.remove("dragging")
}

courses.addEventListener("mousedown", dragStart1)
courses.addEventListener("mousemove", dragging1)
courses.addEventListener("mouseup", dragStop1)

let arrow1 = document.querySelectorAll(".our-courses .arrow");
let firstCourseWidth = courses.querySelector(".course").offsetWidth;
let contentCourse = document.querySelector(".courses-content")

arrow1.forEach(btn => {
    btn.addEventListener("click", ()=> {
        courses.scrollLeft += btn.id == "left" ? -firstCourseWidth : firstCourseWidth;
    })
})

///////////////////////////////////////////////////////////

let dragStart = (e)=> {
    isDragging = true
    tracks.classList.add("dragging")
    startX = e.pageX
    startScrollLeft = tracks.scrollLeft
}

let dragging = (e)=> {
    if (!isDragging) {
        return
    }
    tracks.scrollLeft = startScrollLeft - (e.pageX - startX)
}

let dragStop = ()=> {
    isDragging = false
    tracks.classList.remove("dragging")
}

tracks.addEventListener("mousedown", dragStart)
tracks.addEventListener("mousemove", dragging)
tracks.addEventListener("mouseup", dragStop)

let arrow = document.querySelectorAll(".tracks-content .arrow");
let firstTrackWidth = tracks.querySelector(".track").offsetWidth;
let content = document.querySelector(".tracks-content")

arrow.forEach(btn => {
    btn.addEventListener("click", ()=> {
        tracks.scrollLeft += btn.id == "left" ? -firstTrackWidth : firstTrackWidth;
    })
})