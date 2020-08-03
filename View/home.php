<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/home.css">

    <title>Home</title>
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
                        <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=admin">
                            <?php
                            if ($_COOKIE['role'] =="ADMIN"){
                                ?>
                                <i class="fas fa-user-shield"></i>
                                <?php
                            }
                            ?>
                            <span>Quản lí trang</span>
                        </a>
                        <a  class="user-item" href="http://localhost/web-tin-tuc/index.php?c=User&a=doLogout">

                            <i class="fas fa-sign-out-alt"></i>
                            <span>Đăng xuất</span>
                        </a>


                    </div>
                    <?php

                }else {
                    ?>
                    <div class="login-form" id="form-box">
                        <form class="form" action="http://localhost/web-tin-tuc/index.php?c=User&a=doLogin" method="post">
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
                        <span>Chưa có tài khoản ? <a href="">Đăng kí tại đây</a></span>
                    </div>
            <?php
                }

            ?>


        </div>

    </div>

    <section class="index home main-content">

        <div class="head-story">
            <div class="main-news">

                <div class="content">
                    <div  class="content-left" >
                        <div class="topic">Bài viết mới nhất</div>
                        <div class="new-post">
                            <div class="wrapp-image">
                                <img src="Assets/images/main1.jpg" alt="">
                            </div>
                            <div class="description-post">
                                <span class="tag">thời sự</span><span class="tag">thế giới</span><span class="tag">quận sự</span>
                                <h5 class="title">Tổng thống Mỹ</h5>
                            </div>
                            <div class="interactive">
                                <i class="far fa-heart"></i>
                                <i class="far fa-comment"></i>
                            </div>
                        </div>

                    </div>

                    <div class="content-right">
                        <div class="topic">Top bài viết nổi bật nhất</div>
                        <div class="top-post">
                            <div class="top-post-item">
                                <div class="wrapp-image">
                                    <img src="Assets/images/trending1.jpg" alt="">
                                </div>
                                <div class="post-item-content">
                                    <p> <span class="tag">thời sự</span><span class="tag">thế giới</span><span class="tag">quận sự</span></p>
                                    <h5 class="title">TT Trump tăng tốc trừng phạt TQ khi bầu cử chỉ cách hơn 100 ngày</h5>
                                    <div class="interactive">
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-comment"></i>

                                    </div>
                                </div>

                            </div>
                            <div class="top-post-item">
                                <div class="wrapp-image">
                                    <img src="Assets/images/trending1.jpg" alt="">
                                </div>
                                <div class="post-item-content">
                                    <p> <span class="tag">thời sự</span><span class="tag">thế giới</span><span class="tag">quận sự</span></p>

                                    <h5 class="title">TT Trump tăng tốc trừng phạt TQ khi bầu cử chỉ cách hơn 100 ngày</h5>
                                    <div class="interactive">
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-comment"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="top-post-item">
                                <div class="wrapp-image">
                                    <img src="Assets/images/trending1.jpg" alt="">
                                </div>
                                <div class="post-item-content">
                                    <p> <span class="tag">thời sự</span><span class="tag">thế giới</span><span class="tag">quận sự</span></p>

                                    <h5 class="title">TT Trump tăng tốc trừng phạt TQ khi bầu cử chỉ cách hơn 100 ngày</h5>
                                    <div class="interactive">
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-comment"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="top-post-item">
                                <div class="wrapp-image">
                                    <img src="Assets/images/trending1.jpg" alt="">
                                </div>
                                <div class="post-item-content">
                                    <p> <span class="tag">thời sự</span><span class="tag">thế giới</span><span class="tag">quận sự</span></p>
                                    <h5 class="title">TT Trump tăng tốc trừng phạt TQ khi bầu cử chỉ cách hơn 100 ngày</h5>
                                    <div class="interactive">
                                        <i class="far fa-heart"></i>
                                        <i class="far fa-comment"></i>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="popular-story">
            <div class="topic">Bài viết phổ biến</div>
            <div class="populary-story-content">
                <div class="popular-story-item popular1">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Kinh tế</span><span class="tag">Thể thao</span>
                        <h5 class="title">Đây là title</h5>
                    </div>
                </div>
                <div class="popular-story-item popular2">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Kinh tế</span><span class="tag">Thể thao</span>
                        <h5 class="title">Đây là title</h5>
                    </div>
                </div>
                <div class="popular-story-item popular3">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Kinh tế</span><span class="tag">Thể thao</span>
                        <h5 class="title">Đây là title</h5>
                    </div>
                </div>
                <div class="popular-story-item popular4">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Kinh tế</span><span class="tag">Thể thao</span>
                        <h5 class="title">Đây là title</h5>
                    </div>
                </div>

            </div>
            </div>

    </section>
    <section class="section1">
        <div class="business item">
            <div class="topic">Kinh tế</div>
            <div class="business-content">

                <div class="main">
                    <img src="Assets/images/tech1.jpg" alt="">
                    <div class="content">
                        <span class="tag">Kinh tế</span>
                        <h5 class="title">Thể thao</h5>
                    </div>
                </div>
                <div class="sub">
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech2.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="sport item">
            <div class="topic">Thể thao</div>
            <div class="sport-content">
                <div class="main">
                    <img src="Assets/images/tech1.jpg" alt="">
                    <div class="content">
                        <span class="tag">Kinh tế</span>
                        <h5 class="title">Thể thao</h5>
                    </div>
                </div>
                <div class="sub">
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech2.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="entertaiment item">
            <div class="topic">Giải trí</div>
            <div class="entertaiment-content">
                <div class="main">
                    <img src="Assets/images/tech1.jpg" alt="">
                    <div class="content">
                        <span class="tag">Kinh tế</span>
                        <h5 class="title">Thể thao</h5>
                    </div>
                </div>
                <div class="sub">
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech2.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>
                    <div class="sub-item">
                        <div class="wrapp-image">
                            <img src="Assets/images/tech3.jpg" alt="">
                        </div>
                        <div class="content">
                            <span class="tag">Kinh tế</span>
                            <h5 class="title">Thể thao</h5>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <section class="section2">
        <div class="custorm-post">
            <div class="topic">Bài viết dành cho bạn</div>
            <div class="custorm-post-content">
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>
                <div class="custorm-post-item">
                    <div class="wrapp-image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">the thao</span><span class="tag">the thao</span><span class="tag">the thao</span>
                        <h5 class="title">Giá nhà ở HCM</h5>
                    </div>
                </div>

            </div>
        </div>
        <div class="top-post">
            <div class="topic">Những bài viết hay nhất viết hay nhất </div>
        </div>
    </section>
    <section class="footer">
        <div class="about-us item-footer">
            <h5>Về chúng tôi</h5>
        </div>
        <div class="category item-footer">
            <h5>Các danh mục</h5>
            <div class="footer-categories">
                <?php
                for ($i = 0 ; $i < count($data) ; $i++ ){
                    ?>

                    <a href="" class="grid-item">
                        <i class="<?=$data[$i]->icon?> icon"></i>
                        <span><?=$data[$i]->name?></span>

                    </a>

                    <?php
                }

                ?>
            </div>
        </div>
        <div class="follow-us item-footer">
            <h5>Theo dõi chúng tôi</h5>
            <div class="social-icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-google"></i>
            </div>
        </div>
    </section>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script src="Assets/js/home.js"></script>


</body>
</html>

