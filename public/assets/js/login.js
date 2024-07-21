let eye = document.querySelector(".login form div i");
let input = document.querySelector(".login form div input[type='password']");

eye.addEventListener("click",()=> {
    if (input.type == "password") {
        input.type = "text";
        eye.classList.replace("fa-eye","fa-eye-slash")
    } else {
        input.type = "password";
        eye.classList.replace("fa-eye-slash","fa-eye")
    }
})