document.addEventListener('DOMContentLoaded',function () {

    let boxs = document.getElementsByClassName("box");

    let home = document.getElementById('home');
    let edit_profile = document.getElementById('edit-profile');
    let my_post = document.getElementById('my-post');
    let add_post = document.getElementById('add-post');
    let pending_post = document.getElementById('pending-post');
    let list_post = document.getElementById('list-post');
    let user = document.getElementById('user');
    let pending_regis = document.getElementById('pending-regis');
    let pending_comment = document.getElementById('pending-comment');

    function showBox(){
        for (let i = 0 ; i < boxs.length; i++){
            if(boxs[i].classList[0] != this.id){
                boxs[i].style.display = "none";
            }else {
                boxs[i].style.display="block";
            }
        }
    }


    home.addEventListener('click',showBox);
    edit_profile.addEventListener('click',showBox);
    my_post.addEventListener('click',showBox);
    add_post.addEventListener('click',showBox);
    pending_post.addEventListener('click',showBox);
    list_post.addEventListener('click',showBox);
    user.addEventListener('click',showBox);
    pending_regis.addEventListener('click',showBox);
    pending_comment.addEventListener('click',showBox);

})