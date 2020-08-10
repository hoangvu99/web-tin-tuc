document.addEventListener('DOMContentLoaded',function () {

    let navbar_main = document.getElementById('navbar-main');
    window.onscroll = function(){
        if (this.scrollY > 200){

            navbar_main.classList.add('fix');
        }else {
            navbar_main.classList.remove('fix');
        }
    }

    let btn = document.getElementById('comment-btn');
    let text = document.getElementById('comment-text');
    let comments = document.getElementById('list-comment');

    let btns_reply = document.getElementsByClassName('reply-btn');


    function postComment() {

            let userid = text.dataset.userid;
            let name = "";
            if (userid == 0){
                name = document.getElementById("name").value;
            }
            let postid = text.dataset.postid;
            let content = text.value;

            $.ajax({
                url:"http://localhost/web-tin-tuc/index.php?c=Post&a=addComment",
                type:"post",
                data:{userid:userid,postid:postid,name:name,content:content}
            }).then(function () {
                text.value="";
                let arr = getCookie();
                let item = "<div class='comment-item'> <div class='box-comment'><div class='box-image'> <img src='Assets/images/"+arr[1]+"' alt=''>  </div>  <div class='box-content-comment'> <h5> "+arr[0]+" </h5> <p>"+content+"</p> </div><button class='btn btn-danger reply-btn ' >Trả lời</button></div> <div class='list-reply' ></div> </div>"

                comments.insertAdjacentHTML('afterbegin',item);
                updateEventButton();

            });


    }

    function createBoxReply() {
        let comment_item = this.parentNode.parentNode;

        let box_reply = "<div class='box-reply'> <input type='text' class='form-control' id='reply-text'>\n" +
            "            <button class='btn btn-danger remove_reply'> <i class='fas fa-times'></i> <button class='btn btn-danger add-reply' >Phản hồi</button>  </button> </div>";


        comment_item.insertAdjacentHTML('beforeend',box_reply);
        addEventButton();
    }


    function getCookie(){
        let cookie = document.cookie;
        let arr = cookie.split(";")

        let userInfo = [arr[1].slice(6,arr[1].length),arr[3].slice(8,arr[3].length)]


        return userInfo;

    }
    btn.addEventListener('click',postComment);

    for (let i = 0 ; i < btns_reply.length;i++){
        btns_reply[i].addEventListener('click',createBoxReply);
    }


    function addReplyItem() {

        let list_reply = this.parentNode.parentNode.children[1];

        let box_reply = this.parentNode;
        let comment_id = list_reply.parentNode.dataset.commentid;
        let post_id = list_reply.parentNode.dataset.postid;
        let user_id =list_reply.parentNode.dataset.userid;
        let text = box_reply.children[0].value;
        let arr = getCookie();
        let item =  "<div class='reply-item'> <div class='box-icon'> <i class='fas fa-level-down-alt'></i> </div> <div class='reply-image'> <img src='Assets/images/"+arr[1]+"' alt=''> </div> <div class='reply-content'> <h5>"+arr[0]+"</h5>  <p>"+ text +"</p></div> </div>"

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=Post&a=addReplyComment",
            type: "post",
            data:{postid:post_id,commentid:comment_id,userid:user_id,username:arr[0],content: text}
        }).then(function () {
            box_reply.remove();
            list_reply.insertAdjacentHTML("beforeend",item);
        })




    }

    function addEventButton() {
        let btns_add_reply = document.getElementsByClassName('add-reply');
        let btns_remove_reply = document.getElementsByClassName('remove_reply');
        for (let i = 0 ; i < btns_add_reply.length ; i++){
            btns_add_reply[i].addEventListener('click',addReplyItem);
        }

        for (let i = 0 ; i < btns_remove_reply.length;i++){
            btns_remove_reply[i].addEventListener('click',removeBoxReply);
        }
    }

    function updateEventButton() {
        let btns_reply = document.getElementsByClassName('reply-btn');
        for (let i = 0 ; i < btns_reply.length;i++){
            btns_reply[i].addEventListener('click',createBoxReply);
        }
    }

    function removeBoxReply() {
        this.parentNode.remove();
    }


})