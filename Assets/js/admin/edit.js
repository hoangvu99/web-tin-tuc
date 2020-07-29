'user strict'
document.addEventListener('DOMContentLoaded',function () {

    let email_input = document.getElementById('email');
    let username_input = document.getElementById('username');
    let password = document.getElementById('password');
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let other = document.getElementById('other');



    let eye = document.getElementById('eye');

    let edit_btn = document.getElementById('edit-btn');



    function showBox(){
        for (let i = 0 ; i < boxs.length; i++){
            if(boxs[i].classList[0] != this.id){
                boxs[i].style.display = "none";
            }else {
                boxs[i].style.display="block";
            }
        }
    }

    let checkShowPassWord = 1 ;

    function displayPassword(){
        if (checkShowPassWord == 1){
            eye.classList.remove(eye.classList[2]);
            eye.classList.add("fa-eye");
            password.type="text";
            checkShowPassWord=2;
        }else {
            eye.classList.remove(eye.classList[2]);
            eye.classList.add("fa-eye-slash");
            password.type="password";
            checkShowPassWord=1;
        }
    }
    function getGender() {
        if(male.checked==true){
            return male.value;
        }else if(female.checked==true){
            return female.value;
        }else {
            return other.value;
        }
    }
    function edit(){
        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=User&a=doEdit",
            type:"post",
            data: {email:email_input.value, username:username_input.value,password:password.value,gender:getGender()}

        }).then(function (data) {
            alert("Cập nhập thành công!");

        });



    }
    eye.addEventListener('click',displayPassword);
    edit_btn.addEventListener('click',edit);
})