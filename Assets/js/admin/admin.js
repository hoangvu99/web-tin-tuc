document.addEventListener('DOMContentLoaded',function () {
    let url = window.location.href;



    let action = "home";
    if (url.slice(49,url.length) != ""){
        action = url.slice(49,url.length)
    }

    let box = document.getElementById(action)

    box.style.display="block";












})