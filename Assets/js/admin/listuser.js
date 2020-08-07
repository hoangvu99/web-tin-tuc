document.addEventListener('DOMContentLoaded',function () {

    let user_fill = document.getElementById('user-fill');

    let data = document.getElementsByClassName('user-object');
    let user_search = document.getElementById('user-search');
    let icon_remove = document.getElementsByClassName('remove-user');



    function fillter(){
        let selectedValue = user_fill.options[user_fill.selectedIndex].value;

        if (selectedValue == "all"){
            for (let i = 0 ; i < data.length ; i++){
                data[i].style.visibility = "visible";

            }
        }else{
            for (let i = 0 ; i < data.length ; i++){
                if (data[i].dataset.permission != selectedValue ){
                    data[i].style.visibility = "collapse";
                }else {
                    data[i].style.visibility = "visible";
                }
            }
            console.log(data)
        }
    }

    function keyup(){
        let username = user_search.value;
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

    user_fill.addEventListener('change',fillter);
    user_search.addEventListener('keyup',keyup);
})