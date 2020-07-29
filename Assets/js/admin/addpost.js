document.addEventListener('DOMContentLoaded',function () {

    let creat = document.getElementById('btn-create');
    let title = document.getElementById('btn-title');
    let image = document.getElementById('btn-image');
    let text = document.getElementById('btn-text');
    let slug = document.getElementById('btn-slug');
    let save = document.getElementById('btn-save');
    let clear = document.getElementById('btn-clear');
    let buttons_remove = [];

    let post = document.getElementById('post');
    let new_post = document.getElementById('form-create-post');


    function showNewPost() {
        post.style.display="block";
        if(post.firstChild){
            while (new_post.firstChild){
                new_post.firstChild.remove();
            }
        }

    }

    function createTitle(){
        let input_title = "<tr>" +
            "<td>Tiêu đề</td> " +
            "<td><input type='text' class='form-control title-post' value='tieu de ne '></td>" +
            " <td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>" +
            "</tr>";
        new_post.insertAdjacentHTML("beforeend",input_title);
        buttons_remove = document.getElementsByClassName('btn-remove');
        addEventButton();
    }
    function createImage(){
        let image_input = "<tr >\n" +
            "<td>Hình ảnh</td>\n" +
            "<td><input type=\"file\" class=\"form-control image content-post\"></td>\n" +
            "<td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>\n" +
            "</tr>";
        new_post.insertAdjacentHTML("beforeend",image_input);
        buttons_remove = document.getElementsByClassName('btn-remove');
        addEventButton();
    }

    function createText(){
        let text_input = "<tr>" +
            "<td>Nội dung</td>" +
            "<td><textarea class='content-post' cols='125' rows='7' value='noi dong ne '></textarea></td>" +
            "<td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>" +
            "</tr>";
        new_post.insertAdjacentHTML("beforeend",text_input);
        buttons_remove = document.getElementsByClassName('btn-remove');
        addEventButton();
    }

    function removeRowTable() {
        new_post.deleteRow(this.parentNode.parentNode.rowIndex-1);
        buttons_remove = document.getElementsByClassName('btn-remove');

    }
    function addEventButton(){
        for (let i = 0 ; i < buttons_remove.length ; i++){
            buttons_remove[i].addEventListener('click',removeRowTable);
        }
    }

    function clearAllRow(){
        while (new_post.firstChild){
            new_post.removeChild(new_post.lastChild);
        }
    }

    function createPost(){
        let title = document.getElementsByClassName('title-post');
        let images = document.getElementsByClassName('image');
        let contents = document.getElementsByClassName('content-post');

        let raw_text = "";

        for (let i = 0 ; i < contents.length ; i++){
            raw_text += contents[i].value+" ";
        }


        let content_post = "";

        for (let i = 0 ; i < images.length ; i++){
            let img_url = processImage(images[i].value);

            let img = '<img src="Assets/images/' +
                '' +img_url+
                '">' ;

            content_post = raw_text.replace(images[i].value , img);

        }

        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=addPost",
            type:"POST",
            data:{title:title[0].value,content:content_post}
        }).then(function (data) {

            console.log('thanh cong');

        });

    }

    function processImage(url){
        let correct_image_url = url.split("\\");
        return correct_image_url[correct_image_url.length-1];
    }

    creat.addEventListener('click',showNewPost);
    title.addEventListener('click',createTitle);
    image.addEventListener('click',createImage);
    text.addEventListener('click',createText);
    clear.addEventListener('click',clearAllRow);
    save.addEventListener('click',createPost);

})