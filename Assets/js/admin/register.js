document.addEventListener('DOMContentLoaded',function () {



    let data = document.getElementsByClassName('register-object');
    let register_search = document.getElementById('register-search');
    let icon_remove = document.getElementsByClassName('remove-user');

    let registercheckboxall = document.getElementsByClassName('register-checkbox-all')[0];
    let registercheckbox = document.getElementsByClassName('register-checkbox');

    let btn_approval = document.getElementById('approval-register');
    let btn_approval_all = document.getElementById('approval-all-register');




    function approvalRegister() {

        let data_register=[];

        for (let i = 0 ; i < registercheckbox.length;i++){
            if (registercheckbox[i].checked==true){
                data_register.push([
                    registercheckbox[i].parentNode.parentNode.children[0].dataset.registerid,
                    registercheckbox[i].parentNode.parentNode.children[1].textContent,
                    registercheckbox[i].parentNode.parentNode.children[2].textContent,
                    registercheckbox[i].parentNode.parentNode.children[3].textContent,
                    registercheckbox[i].parentNode.parentNode.children[4].children[0].value

                ]);

            }
        }

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=addUser",
            type:"post",
            data:{data:data_register}
        }).then(function () {
            alert("Phê duyệt thành công!!!");
            for (let i = 0 ; i < data.length;i++){
                data[i].style.display="none";
            }
        });


    }

    function approvalAllRegister() {

        let data_register=[];

        for (let i = 0 ; i < registercheckbox.length;i++){

                data_register.push([
                    registercheckbox[i].parentNode.parentNode.children[0].dataset.registerid,
                    registercheckbox[i].parentNode.parentNode.children[1].textContent,
                    registercheckbox[i].parentNode.parentNode.children[2].textContent,
                    registercheckbox[i].parentNode.parentNode.children[3].textContent,
                    registercheckbox[i].parentNode.parentNode.children[4].children[0].value

                ]);


        }

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=addUser",
            type:"post",
            data:{data:data_register}
        }).then(function () {
            alert("Phê duyệt thành công!!!");
            for (let i = 0 ; i < data.length;i++){
                data[i].style.display="none";
            }
        });


    }


    function keyup(){
        let username = register_search.value;
        if (username == ""){
            for (let i = 0 ; i < data.length ; i++){
                data[i].style.visibility = "visible";

            }
        }else{
            for (let i = 0 ; i < data.length ; i++){
                if (data[i].children[2].textContent != username){
                    data[i].style.visibility = "collapse";
                }else {
                    data[i].style.visibility = "visible";
                }
            }

        }
    }

    function removeUserByUserId(){
        let id = this.dataset.userid;
        this.parentNode.parentNode.remove();
        console.log(id);
        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=deleteUserByUserId",
            type:"post",
            data:{id:id}
        }).then(function () {
            console.log("Xóa thành viên thành công");

        });
    }
    for (let i = 0 ; i < icon_remove.length ; i++){
        icon_remove[i].addEventListener('click',removeUserByUserId);
    }

    function checkboxallClick() {

        if (this.checked==true){

            for(let i = 0 ; i < registercheckbox.length ; i++){
                registercheckbox[i].checked = true;
            }
        }else{
            for(let i = 0 ; i < registercheckbox.length ; i++){
                registercheckbox[i].checked =   false;
            }
        }

    }
    function checkboxitemClick(){
        if (this.checked == false ){
            registercheckboxall.checked=false;
        }
    }

    register_search.addEventListener('keyup',keyup);
    registercheckboxall.addEventListener('click',checkboxallClick);
    for (let i = 0 ; i < registercheckbox.length ; i++){
        registercheckbox[i].addEventListener('click', checkboxitemClick);
    }

    btn_approval.addEventListener('click',approvalRegister);
    btn_approval_all.addEventListener('click',approvalAllRegister);
})