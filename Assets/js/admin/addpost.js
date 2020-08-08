document.addEventListener('DOMContentLoaded',function () {

    let listCategoris;

    $.ajax({
        url:'http://localhost/web-tin-tuc/index.php?c=Api&a=getListCategories'
    }).then(function (data) {
        listCategoris = $.parseJSON(data);
    });

    let creat = document.getElementById('btn-create');
    let title = document.getElementById('btn-title');
    let image = document.getElementById('btn-image');
    let text = document.getElementById('btn-text');
    let slug = document.getElementById('btn-slug');
    let save = document.getElementById('btn-save');
    let clear = document.getElementById('btn-clear');
    let category = document.getElementById('btn-category');
    let userId = document.getElementById('user-id');
    let intro  = document.getElementById('btn-intro');
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
            "<td><input type='text' class='form-control title-input'></td>" +
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
            "<td><textarea class='content-post' cols='125' rows='7'  ></textarea></td>" +
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

    function createIntro() {
        let input_intro = "<tr>" +
            "<td>Giới thiệu</td> " +
            "<td><input type='text' class='form-control intro-input'></td>" +
            " <td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>" +
            "</tr>";
        new_post.insertAdjacentHTML("beforeend",input_intro);
        buttons_remove = document.getElementsByClassName('btn-remove');
        addEventButton();
    }

    function createPost(){
        let title = document.getElementsByClassName('title-input');
        let images = document.getElementsByClassName('image');
        let contents = document.getElementsByClassName('content-post');
        let select = document.getElementById('categories-option');
        let slug = document.getElementById('slug');
        let value = select.options[select.selectedIndex].value;
        let intro = document.getElementsByClassName('intro-input');

        let raw_text = "";

        for (let i = 0 ; i < contents.length ; i++){
            raw_text += contents[i].value+" ";
        }

        let arr = raw_text.split(' ');
        let content_post = "";

        let image_thumbnail = "";
        for (let i = 0 ; i < arr.length ; i++){
            for (let j = 0 ; j < images.length ;j++){
                if (arr[i] == images[j].value){
                    let img_url = processImage(images[j].value);
                    let img = '<img src="Assets/images/' +
                        '' +img_url+
                        '">' ;
                    image_thumbnail = img;
                    arr[i] = img;

                }
            }
            content_post+=arr[i]+" ";
        }

        console.log(image_thumbnail);
        $.ajax({
            url:"http://localhost/web-tin-tuc/index.php?c=admin&a=addPendingPost",
            type:"POST",
            data:{title:title[0].value,content:content_post,slug:slug.value,categoryId:value,userId:userId.innerText,intro:intro[0].value,imageThumbnail:image_thumbnail}
        }).then(function () {
            alert('Tạo bài viết thành công!!!');
            clearAllRow();
        });

    }

    function createSlug() {

        let viet_key = [
            'A','Ạ','Ả','Ã','À','Á',
            'Ă','Ặ','Ẳ','Ẵ','Ằ','Ắ',
            'Â','Ậ','Ẩ','Ẫ','Ầ','Ấ',
            'B','C','D','Đ','E','Ẹ',
            'Ẻ','Ẽ','È','É','Ê','Ệ',
            'Ể','Ễ','Ề','Ế','G','H',
            'I','Ị','Ỉ','Ĩ','Ì','Í',
            'K','L','M','N','O','Ọ',
            'Ỏ','Õ','Ò','Ó','Ô','Ộ',
            'Ổ','Ỗ','Ồ','Ố','Ơ','Ợ',
            'Ở','Ỡ','Ờ','Ớ','P','Q',
            'R','S','T','U','Ụ',
            'Ủ','Ũ','Ù','Ú','Ư','Ự',
            'Ử','Ữ','Ừ','Ứ','V','X',
            'Y','a','ạ','ả','ã','à',
            'á','ă','ặ','ẳ','ẵ','ằ',
            'ắ','â','ậ','ẩ','ẫ','ầ',
            'ấ','b','c','e','ẹ','ẻ',
            'ẽ','è','d','đ', 'é','ê',
            'ệ','ể','ễ','ề', 'ế','g',
            'h','i','ị','ỉ', 'ĩ','ì',
            'í','k','l', 'm','n',
            'o','ọ','ỏ','õ','ò','ó',
            'ô','ộ','ổ','ỗ','ồ','ố',
            'ơ','ợ','ở','ỡ','ờ','ớ',
            'q','r','s','t','u','ụ',
            'ủ','ũ','ù','ú','ư','ự',
            'ử','ữ','ừ', 'ứ','v','x',
            'y',' ','0', '1','2','3',
            '4','5','6', '7','8','9',
            '.','-',','
        ];
        let eng_key = [
            'a','a','a','a','a','a',
            'a','a','a','a','a','a',
            'a','a','a','a','a','a',
            'b','c','d','d','e','e',
            'e','e','e','e','e','e',
            'e','e','e','e','g','h',
            'i','i','i','i','i','i',
            'k','l','m','n','o','o',
            'o','o','o','o','o','o',
            'o','o','o','o','o','o',
            'o','o','o','o','p','q',
            'r','s','t','u','u',
            'u','u','u','u','u','u',
            'u','u','u','u','v','x',
            'y','a','a','a','a','a',
            'a','a','a','a','a','a',
            'a','a','a','a','a','a',
            'a','b','c','e','e','e',
            'e','e','d','d', 'e','e',
            'e','e','e','e', 'e','g',
            'h','i','i','i', 'i','i',
            'i','k','l', 'm','n',
            'o','o','o','o','o','o',
            'o','o','o','o','o','o',
            'ơ','o','o','o','o','o',
            'q','r','s','t','u','u',
            'u','u','u','u','u','u',
            'u','u','u', 'u','v','x',
            'y','-','0', '1','2','3',
            '4','5','6', '7','8','9',
            '.','-',''
        ];



        let title = document.getElementsByClassName('title-input')[0];
        let t = title.value.trim();
        let sl = "";
        for (let i = 0 ; i < t.length ; i++){
            for (let j = 0 ; j < viet_key.length; j++){
                if (t[i] == viet_key[j]){
                    sl+=eng_key[j];
                }
            }
        }

        let input_title = "<tr>" +
            "<td>Slug</td> " +
            "<td><input type='text' class='form-control title-post slug' id='slug' readonly value=" +
            sl+"></td>" +
            " <td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>" +
            "</tr>";
        new_post.insertAdjacentHTML("beforeend",input_title);
        buttons_remove = document.getElementsByClassName('btn-remove');
        addEventButton();

    }
    function processImage(url){
        let correct_image_url = url.split("\\");
        return correct_image_url[correct_image_url.length-1];
    }

    function createOptionCategory(){

        let select_input = "<tr>" +
            "<td>Chủ đề</td>"+
            "<td> <select class='form-control' id='categories-option'>"+
            "</select> </td>"+
            " <td><button class='btn btn-danger btn-remove' id='btn-remove' '><i class='fas fa-times'  ></i></button></td>" +
            "</tr>";


        new_post.insertAdjacentHTML('beforeend',select_input);
        addOption();
        addEventButton();
    }

    function addOption(){
        let select = document.getElementById('categories-option');

        for (let i = 0 ; i <listCategoris.length ; i++){
            let option = document.createElement('option');
            option.value= listCategoris[i].id;
            option.text=listCategoris[i].name;
            select.add(option);
        }
    }

    creat.addEventListener('click',showNewPost);
    title.addEventListener('click',createTitle);
    image.addEventListener('click',createImage);
    text.addEventListener('click',createText);
    clear.addEventListener('click',clearAllRow);
    save.addEventListener('click',createPost);
    slug.addEventListener('click',createSlug);
    intro.addEventListener('click',createIntro);
    category.addEventListener('click',createOptionCategory);


})