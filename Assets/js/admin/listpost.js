document.addEventListener('DOMContentLoaded',function () {
    let data = document.getElementsByClassName('grid-item');
    let btns_remove = document.getElementsByClassName('box-wrapp-button-remove');
    let fill = document.getElementById('post-fill');
    let sort = document.getElementById('sort');
    let modal = document.getElementById('modal-view-post-item');
    let btn_close = document.getElementById('btn-close-post');



    for (let i = 0 ; i < btns_remove.length ;i++){
        btns_remove[i].addEventListener('click',removePostItem);
    }

    function removePostItem() {
        let id = this.parentNode.parentNode.dataset.postid;
        this.parentNode.parentNode.remove();

        $.ajax({
            url:'http://localhost/web-tin-tuc/index.php?c=admin&a=removePostByPostId',
            type:"post",
            data:{id:id}
        });
    }

    function fillter() {

        let key = fill.options[fill.selectedIndex].value;
        if (key == 0 ){
            for (let i = 0 ; i < data.length;i++){
                if (data[i].dataset.categoryid != key){
                    data[i].style.display="block";

                }
            }
        }else {
            for (let i = 0 ; i < data.length;i++){
                if (data[i].dataset.categoryid != key){
                    data[i].style.display="none";

                }else {
                    data[i].style.display="block";
                }
            }
        }


    }
    function sorter(){
        let current_item = document.getElementsByClassName('grid-item');
        console.log(current_item);
    }

    function viewPost(){
        let id = this.dataset.postid
        let title = document.getElementById('title-post');
        let intro = document.getElementById('intro-post');
        let content = document.getElementById('post-text');

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=previewpost",
            type:"post",
            data:{id:id}
        }).then(function (postObject) {
           let post = $.parseJSON(postObject);
           title.innerText = post.title;
           intro.innerText=post.intro;
           content.innerHTML=post.content;
            modal.style.display="block";
        })
    }
    for (let i = 0 ; i< data.length ; i++){
        data[i].addEventListener('click',viewPost);

    }

    function closePost(){
        modal.style.display="none";
    }

    btn_close.addEventListener('click',closePost);
    fill.addEventListener('change',fillter);
    sort.addEventListener('change',sorter);

    window.onclick = function (event) {
        if (event.target ==modal ){
            modal.style.display="none";
        }
    };
})



