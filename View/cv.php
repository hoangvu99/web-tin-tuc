<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <title>Document</title>
    <style>
        .middle {
            width: 700px;
            height: 200px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .form-group{
            display: flex;
            justify-content: center;
        }
        .form-control {
            margin: 15px;
        }
        .result {
            height: calc(200px - 86px);
            display: flex;
            justify-content: center;
            align-items: center;
        }



    </style>
</head>
<body>
    <div class="middle">
        <div class="form-group form-inline " >
            <input type="text" style="width: 500px" class="form-control" id="title">
            <button class="btn btn-danger form-control " id="convert-btn">Convert</button>

        </div>
        <div class="result">
            <p class="result-text" id="result-text"></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script>

        let convert_btn = document.getElementById('convert-btn');
        let title = document.getElementById('title');
        let p = document.getElementById('result-text');

        function convert(){
            let slug = "";
            for (let i = 0 ; i < title.value.length ; i++){
                for (let j = 0 ; j < viet_key.length;j++){
                    if (title.value[i] == viet_key[j]){
                        slug+=eng_key[j];
                    }
                }
            }

            p.innerText=slug;
            title.value="";

        }
        convert_btn.addEventListener('click',convert);
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
            'Y','Ý','Ỹ','Ỳ','a','ạ','ả','ã','à',
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
            'y','ý','ỹ','ỳ',' ','0', '1','2','3',
            '4','5','6', '7','8','9',
            '.','-','','F','f','/','p','W','w','Z','z','ỷ','ỵ','Ỷ','Ỵ'
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
            'y','y','y','y','a','a','a','a','a',
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
            'y','y','y','y','-','0', '1','2','3',
            '4','5','6', '7','8','9',
            '.','-',',','f','f','/','p','w','w','z','z','y','y','y','y'
        ];


    </script>
</body>
</html>
