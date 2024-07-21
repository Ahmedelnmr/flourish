let videoLinks = document.querySelectorAll(".video-details .v-links button");
let video = document.querySelector(".video-details video source");

// videoLinks.forEach(link => {
//     if (link.value==video.src) {
//         link.addEventListener("click",()=> {
//             removeBackground(videoLinks);
//             link.classList.add("v-background");
//         })
//     }else {
//         console.log("not")
//     }
// });

console.log(video.src)
console.log(videoLinks[0].value)

addBackground();

function removeBackground(v) {
    v.forEach(video => {
        video.classList.remove("v-background");
    })
}

function addBackground() {
    videoLinks.forEach(link => {
        if (link.value==video.src) {
                removeBackground(videoLinks);
                link.classList.add("v-background");
        }else {
            console.log("not")
        }
    });
}