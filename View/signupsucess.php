<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/signupsuccess.css">

    <title>Home</title>
</head>
<body>


<nav class="navbar navbar-expand-lg d-block">
    <div class="navbar-head">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <h1>News</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-bar" id="navigation-bar">

        <div class="navbar-main">
            <div class="container-fluid">
                <div class="row">
                    <ul>
                        <?php
                        foreach ($data as $item => $value){
                            ?>
                            <li>
                                <i class="<?= $value->icon ?>"></i>
                                <?= $value->name ?>
                            </li>

                            <?php
                        }

                        ?>
                    </ul>
                </div>
            </div>


            <div class="buttons"><button class="btn-icon btn" id="btn-open-form-login"> <i class="fas fa-caret-down"></i></button></div>
            <div class="form-box"id="form-box">
                <div class="form-login" >
                    <form  class="form" action="http://localhost/web-tin-tuc/index.php?c=User&a=doLogin" method="post" >
                        <div class="form-group">
                            <h5>Đăng nhập</h5>
                            <input type="text" name="email" value="nguyenhoangvu12c5@gmail.com" placeholder="enter your email" class="form-control">
                            <input type="password" name="password" value="123" placeholder="enter your password" class="form-control">
                            <button type="submit" class="form-control btn btn-primary">Đăng nhập</button>
                            <span>Chưa có tài khoản <a href="http://localhost/web-tin-tuc/index.php?c=User&a=doSignUp">Đăng kí ở đây!</a> </span>
                        </div>
                    </form>

                </div>
            </div>



        </div>

    </div>
</nav>
<section class="dang-ki">

    <div class="container">

        <div class="row">
           <div class="col-lg-12">
               <h5>Bạn đã đăng kí tài khoản thành công. Trong khi chờ được xét duyệt! Hãy trở lại <a href="http://localhost/web-tin-tuc/index.php">trang chủ</a></h5>
               <div class="image">
                   <img src="Assets/images/chuechxanh.jpg" alt="">
               </div>
           </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/home.js"></script>
<script src="Assets/js/signup.js"></script>


</body>
</html>


