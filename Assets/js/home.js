'use trict'
document.addEventListener('DOMContentLoaded',function () {
    let navigation_bar = document.getElementById('navigation-bar');
    window.onscroll = function(){
        if (this.scrollY > 150){

            navigation_bar.classList.add('fix');
        }else {
            navigation_bar.classList.remove('fix');
        }
    }





    function show() {
        let box_user = document.getElementById('user-box');
        let box_noti = document.getElementById('noti-box');
        let form_login = document.getElementById('form-box');
        if (this.id == "btn-open-form-login"){
            form_login.classList.toggle('show');
        }

        if(this.id == "btn-user"){
            box_user.classList.toggle('show');
            box_noti.classList.remove('show');
            console.log('user');
        }
        if (this.id == "btn-noti"){
            box_noti.classList.toggle('show');
            box_user.classList.remove('show');
            console.log('noti');
        }

    }
    if (document.getElementById('btn-user') && document.getElementById('btn-noti')){
        let user = document.getElementById('btn-user');
        let noti = document.getElementById('btn-noti');
        user.addEventListener('click',show);
        noti.addEventListener('click',show);

    }
    if (document.getElementById('btn-open-form-login')){
        let login = document.getElementById('btn-open-form-login');
        login.addEventListener('click',show);
    }



},false)