<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/viewpost.css">
    <title>Document</title>
</head>
<body>
<div class="main-menu">
    <div class="navbar-head">
        <h1>Vnews</h1>
    </div>
    <div class="navbar-main" id="navbar-main">
        <div class="box-logo">
            <i class="fas fa-gem"></i>
        </div>
        <div class="navigation-bar">
            <ul class="nav">

                <?php
                for ($i = 0 ; $i < count($data) ; $i++ ){
                    ?>
                    <li class="nav-item">
                        <a href="" class="nav-link">
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
                <div class="noti-item"></div>
                <div class="noti-item"></div>
                <div class="noti-item"></div>

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
                        <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=admin&a=admin">
                        <i class="fas fa-user-shield"></i>
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
        <div class="post-content">
            <div class="post-head">
                <h3 class="post-title">
                    <?=$post->title?>

                </h3>

                <h5 class="author"><a href=""><?=$user->username?></a></h5>


            </div>
            <div class="post-body">
                <h5 class="intro"><?=$post->intro?></h5>
                <?=$post->content?>
            </div>
            <div class="comment">
                <div class="comment-head">
                    <h4>comment</h4>
                </div>
                <div class="comment-body">
                    <?php
                        if (!isset($_COOKIE['id'])){
                            ?>
                            <input type="text"  class="form-control" id="name" placeholder="Nhập tên...">

                    <?php
                        }
                    ?>
                    <textarea name="" data-postid ="<?=$post->id?>" data-userid="<?= (isset($_COOKIE['id'])) ? $_COOKIE['id'] : 0 ?>" id="comment-text" ></textarea>
                    <button class="btn btn-danger" id="comment-btn">Post Comment</button>
                </div>
                <div class="list-comment" id="list-comment">

                    <?php
                        for ($i=count($listComment) - 1 ; $i >= 0 ; $i--){
                            ?>
                            <div class="comment-item" data-commentid="<?=$listComment[$i][0]?>" data-userid="<?= (isset($_COOKIE['id'])) ? $_COOKIE['id'] : 0 ?>" data-postid="<?=$post->id?>" >
                                <div class="box-comment">
                                    <div class="box-image">
                                        <img src="Assets/images/<?=$listComment[$i][5]->avatar?>" alt="">
                                    </div>
                                    <div class="box-content-comment">
                                        <h5><?=$listComment[$i][4]?></h5>
                                        <p><?=$listComment[$i][3]?></p>
                                    </div>
                                    <button class="btn btn-danger reply-btn " id="">Trả lời</button>

                                </div>
                                <div class="list-reply" id="list-reply">
                                    <?php
                                        $listReplay = $listComment[$i][6];
                                        for ($j = 0 ; $j < count($listReplay) ; $j++){
                                            ?>
                                            <div class="reply-item">
                                                <div class="reply-image">
                                                    <img src="Assets/images/<?= $listReplay[$j][6]->avatar ?>" alt="">
                                                </div>
                                                <div class="reply-content">
                                                    <h5><?= $listReplay[$j][3]?></h5>
                                                    <p><?= $listReplay[$j][1]?></p>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                    <?php
                        }

                    ?>

                </div>
            </div>

        </div>
    </section>





    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/home.js"></script>
    <script src="Assets/js/viewpost.js"></script>

</body>
</html>


