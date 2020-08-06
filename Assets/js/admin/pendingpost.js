document.addEventListener('DOMContentLoaded',function () {

    let check_box_all = document.getElementById('pending-post-all');
    let checkboxitems = document.getElementsByClassName('pending-post-item');
    let btn_approval_pending_post = document.getElementById('btn-approval-pending-post');



    function checkboxallClick() {

        if (this.checked==true){

            for(let i = 0 ; i < checkboxitems.length ; i++){
                checkboxitems[i].checked = true;
            }
        }else{
            for(let i = 0 ; i < checkboxitems.length ; i++){
                checkboxitems[i].checked =   false;
            }
        }

    }
    function checkboxitemClick(){
        if (this.checked == false ){
            check_box_all.checked=false;
        }
    }

    function approvalPendingPost(){
        let data = [];
        for (let i = 0 ; i < checkboxitems.length ;i++){
            if(checkboxitems[i].checked==true){
                let child =[
                            checkboxitems[i].parentNode.parentNode.children[1].dataset.ppid,
                            checkboxitems[i].parentNode.parentNode.children[2].textContent,
                            checkboxitems[i].parentNode.parentNode.children[2].dataset.slug,
                            checkboxitems[i].parentNode.parentNode.children[3].dataset.intro,
                            checkboxitems[i].parentNode.parentNode.children[3].innerHTML,
                            checkboxitems[i].parentNode.parentNode.children[4].dataset.userid,
                            checkboxitems[i].parentNode.parentNode.children[5].dataset.categoryid,
                            checkboxitems[i].parentNode.parentNode.children[3].dataset.imagethumbnail]
                data.push(child)


            }
        }
        console.log(data);

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=Admin&a=addPost",
            type:'post',
            data: {listPost:data},


        }).then(function () {
            for(let i = 0 ; i < checkboxitems.length; i++ ){
                if(checkboxitems[i].checked=true){
                    checkboxitems[i].parentNode.parentNode.remove();
                }
            }
        });


    }

    btn_approval_pending_post.addEventListener('click',approvalPendingPost);
    check_box_all.addEventListener('click',checkboxallClick);
    for (let i = 0 ; i < checkboxitems.length ; i++){
        checkboxitems[i].addEventListener('click',checkboxitemClick);
    }



})