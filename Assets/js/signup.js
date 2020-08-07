document.addEventListener('DOMContentLoaded',function () {

    let dataUser;
    $.ajax({
            url: "http://localhost/web-tin-tuc/index.php?c=Api&a=getListUserName"
    }).then(function (data) {
        dataUser = $.parseJSON(data);

    });


    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let username = document.getElementById('username');
    let repassword = document.getElementById('re-password');
    let button = document.getElementById('btn-regis');

    let errorEmail = document.getElementById('errorEmail');
    let errorUsername = document.getElementById('errorUsername');
    let errorPass = document.getElementById('errorPass');
    let errorRepass = document.getElementById('error-re-password')

    let errorEmail_icon = document.getElementById('errorEmail-icon');
    let errorUsername_icon = document.getElementById('errorUsername-icon');
    let errorPass_icon = document.getElementById('errorPass-icon');
    let errorRepass_icon = document.getElementById('error-re-password-icon');

    let show_pass = document.getElementsByClassName('show-pass');
    let checkNull = false;
    function validateEmail() {
        const re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(re.test(email.value)){
            for (let i = 0 ; i < dataUser.length ; i++){
                if (email.value == dataUser[i][2]){
                    return 0;
                }
            }
            return 1;
        }
        return 2;
    }

    function validatePassword() {
        if(password.value == repassword.value){
            return true;
        }
        return false;
    }
    function validateUserName() {
        for(let i = 0 ; i < dataUser.length ; i++){
            if(username.value == dataUser[i][1]){
                return false;

            }
        }
        return true;
    }
    function validatePassword(){
        if(password.value.length >= 8){
            return true;
        }
        return false;
    }

    function checkRePassWord() {
        if(repassword.value == password.value){
            return true;
        }
        return false;
    }
    let checkEmail,checkUsername,checkPass,checkRepass = true;
    function keyup() {
        if(this.id == "email"){
            if(this.value == ""){
                errorEmail_icon.classList.remove(errorEmail_icon.classList[1]);
                errorEmail.innerText="";
                checkEmail= false;
            }else {
                if(validateEmail() == 1){
                    errorEmail_icon.classList.remove(errorEmail_icon.classList[1]);
                    errorEmail_icon.classList.add('fa-check');
                    errorEmail.innerText="Tài khoản email hợp lệ";
                    checkEmail=true;
                }else if(validateEmail() == 2) {
                    errorEmail_icon.classList.remove(errorEmail_icon.classList[1]);
                    errorEmail_icon.classList.add('fa-exclamation-circle')
                    errorEmail.innerText="Tài khoản email không hợp lệ";
                    checkEmail = false;
                }else{
                    errorEmail_icon.classList.remove(errorEmail_icon.classList[1]);
                    errorEmail_icon.classList.add('fa-exclamation-circle')
                    errorEmail.innerText="Tài khoản email đã được sử dụng";
                    checkEmail = false;
                }
            }
        }

        if (this.id =="username"){
            if (this.value == ""){
                errorUsername_icon.classList.remove(errorUsername_icon.classList[1]);
                errorUsername.innerText="";
                checkUsername= false;
            }else {
                if(validateUserName()){
                    errorUsername_icon.classList.remove( errorUsername_icon.classList[1]);
                    errorUsername_icon.classList.add('fa-check');
                    errorUsername.innerText="Tên có thể sử dụng được!";
                    checkUsername=true;
                }else {
                    errorUsername_icon.classList.remove(errorUsername_icon.classList[1]);
                    errorUsername_icon.classList.add('fa-exclamation-circle')
                    errorUsername.innerText="Tên đã tồn tại";
                    checkUsername = false;
                }
            }
        }

        if (this.id =="password"){
            if (this.value != ""){
                if (validatePassword()){
                    errorPass_icon.classList.remove( errorPass_icon.classList[1]);
                    errorPass_icon.classList.add('fa-check');
                    errorPass.innerText="Mật khẩu hợp lệ";
                    checkPass=true;
                }else {
                    errorPass_icon.classList.remove(errorPass_icon.classList[1]);
                    errorPass_icon.classList.add('fa-exclamation-circle')
                    errorPass.innerText="Mật khẩu quá ngắn";
                    checkPass = false;
                }
            }else {
                errorPass_icon.classList.remove(errorPass_icon.classList[1]);
                errorPass.innerText="";
                checkPass = false;
            }
        }

        if (this.id =="re-password"){
            if(this.value!=""){
                if(checkRePassWord()){
                    errorRepass_icon.classList.remove(errorRepass_icon.classList[1]);
                    errorRepass_icon.classList.add('fa-check');
                    errorRepass.innerText="Mật khẩu chính xác";
                    checkRepass=true;
                }else {
                    errorRepass_icon.classList.remove(errorRepass_icon.classList[1]);
                    errorRepass_icon.classList.add('fa-exclamation-circle')
                    errorRepass.innerText="Mật khẩu chưa chính xác";
                    checkRepass = false;
                }
            }else {
                errorRepass_icon.classList.remove(errorRepass_icon.classList[1]);
                errorRepass.innerText="";
                checkRepass = false;
            }
        }
        if (checkEmail && checkUsername && checkPass && checkRepass){
            button.disabled = false;
        }else {
            button.disabled = true;
        }

    }
    let p = 1;
    let rp =1;
    function showPass(){
        if (p == 1){
            this.classList.remove(this.classList[2]);
            this.classList.add("fa-eye");
            this.parentNode.children[1].type="text";
            p=2;
        }else{
            this.classList.remove(this.classList[2]);
            this.classList.add("fa-eye-slash");
            this.parentNode.children[1].type="password";
            p=1;
        }


    }
    function showRePass(){
        if (rp == 1 ){
            this.classList.remove(this.classList[2]);
            this.classList.add("fa-eye");
            this.parentNode.children[1].type="text";
            rp=2;
        }else{
            this.classList.remove(this.classList[2]);
            this.classList.add("fa-eye-slash");
            this.parentNode.children[1].type="password";
            rp=1;
        }
    }
    email.addEventListener('keyup',keyup);
    username.addEventListener('keyup',keyup);
    password.addEventListener('keyup',keyup);
    repassword.addEventListener('keyup',keyup);
    show_pass[0].addEventListener('click',showPass);
    show_pass[1].addEventListener('click',showRePass);



})