<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/postbycategory.css">
    <title>Document</title>
</head>
<body>
<div class="main-menu">
    <div class="navbar-head">
        <h1>Vnews</h1>
    </div>
    <div class="navbar-main" id="navbar-main">
        <div class="box-logo">
            <a href="http://localhost/web-tin-tuc/index.php"><i class="fas fa-gem"></i></a>
        </div>
        <div class="navigation-bar">
            <ul class="nav">

                <?php
                for ($i = 0 ; $i < count($data) ; $i++ ){
                    ?>
                    <li class="nav-item">
                        <a href="http://localhost/web-tin-tuc/index.php?categoryid=<?=$data[$i]->id?>&categoryname=<?=$data[$i]->name?>" class="nav-link">
                            <i class="<?=$data[$i]->icon?> icon"></i>
                            <span><?=$data[$i]->name?></span>

                        </a>
                    </li>
                    <?php
                }

                ?>
            </ul>
        </div>


        <div class="box-control">
            <?php
            if(isset($_COOKIE['name'])){
                ?>
                <div class="wrapp-icon"><i class="fas fa-bell" id="btn-noti"></i></div>


                <?php
                if ($_COOKIE['avatar'] !=""){
                    ?>
                    <div class="wrapp-icon"><img id="btn-user" src="Assets/images/<?=$_COOKIE['avatar']?>" alt=""></div>
                    <?php
                }else {
                    ?>
                    <div class="wrapp-icon"><i class="fas fa-user" id="btn-user"></i></div>
                    <?php
                }
                ?>


                <?php
            }else {
                ?>
                <div class="wrapp-icon"><i class="fas fa-caret-down" id="btn-open-form-login"></i></div>
                <?php
            }
            ?>
        </div>

        <?php
        if(isset($_COOKIE['name'])){
            ?>
            <div class="noti-box" id="noti-box">
                <?php
                for ($i = count($listNoti) - 1  ; $i >= 0 ; $i--){
                    ?>
                    <div class="noti-item"> <p><?= $listNoti[$i][1]?></p> </div>
                    <?php
                }
                ?>

            </div>
            <div class="user-box " id="user-box">


                <a  class="user-item" href="http://localhost/web-tin-tuc/index.php">
                    <?php
                    if ($_COOKIE['avatar'] !=""){
                        ?>
                        <img src="Assets/images/<?=$_COOKIE['avatar']?>" alt="">
                        <?php
                    }else {
                        ?>
                        <div class="wrapp-icon"><i class="fas fa-user"></i></div>
                        <?php
                    }
                    ?>
                    <span>Trang cá nhân</span>
                </a>

                <?php
                if ($_COOKIE['role'] =="ADMIN"){
                    ?>
                      <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=admin">

                      <i class="fas fa-user-shield"></i>
                        <span>Quản lí trang</span>
                        </a>
                      
                    <?php
                }else if ($_COOKIE['role'] =="CREATOR"){
                    ?>
                    <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=admin">

                    <i class="fas fa-user-cog"></i>
                        <span>Quản lí trang</span>
                        </a>
                    
                    <?php
                }
                ?>


                <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=User&a=doLogout&s=<?=$post->slug?>">

                    <i class="fas fa-sign-out-alt"></i>
                    <span>Đăng xuất</span>
                </a>


            </div>
            <?php

        }else {
            ?>
            <div class="login-form" id="form-box">
                <form class="form" action="http://localhost/web-tin-tuc/index.php?c=User&a=doLogin&s=<?=$post->slug?>" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="email" value="nguyenhoangvu12c5@gmail.com" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="mật khẩu" value="admin" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-login" type="submit" id="btn-login">Đăng nhập</button>
                    </div>
                </form>
                <span>Chưa có tài khoản ? <a href="http://localhost/web-tin-tuc/index.php?c=user&a=signUp">Đăng kí tại đây</a></span>
            </div>
            <?php
        }

        ?>


    </div>

</div>

<section>
        <div class="list-post">
            <div class="category"><h5>Bài viết theo danh mục : <?=$categoryname?></h5></div>
            <div class="grid-container">

                <?php
                    for ($i = 0 ; $i < count($listPostByCategoryId);$i++){
                        ?>
                        <div class="grid-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=Post&a=viewPost&s=<?=$listPostByCategoryId[$i][6]?>">


                                    <div class="list-post-item">

                                        <div class="image-thumbnail">
                                            <span><?= $listPostByCategoryId[$i][11] ?></span>
                                        </div>
                                        <div class="post-detail">
                                            <h5 class="title-post"><?= $listPostByCategoryId[$i][2] ?></h5>
                                            <p class="intro-post"><?= $listPostByCategoryId[$i][3] ?>...</p>

                                        </div>
                                        <div class="reaction">
                                            <div class="reaction-item" style="justify-content: normal;width: 40%">

                                            </div>
                                            <div class="reaction-item" style="width: 20%">
                                                <span><i class="fas fa-eye"></i><?= $listPostByCategoryId[$i][9] ?></span>
                                            </div>
                                            <div class="reaction-item" style="width: 20%">
                                                <span><i class="far fa-heart"></i><?= $listPostByCategoryId[$i][10] ?></span>
                                            </div>
                                            <div class="reaction-item" style="width: 20%">
                                                <span><i class="far fa-comment"></i><?= $listPostByCategoryId[$i][5] ?></span>
                                            </div>




                                        </div>
                                    </div>



                            </a>
                        </div>
                <?php
                    }

                ?>

            </div>
        </div>
</section>





<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/home.js"></script>


</body>
</html>


