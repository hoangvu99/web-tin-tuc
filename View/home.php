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
        <div class="navigation-bar">
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
           </div>
        </div>
    </nav>
    <section class="main-section">
        <div class="container">
            <div class="row main">
                <div class="col col-lg-6 main-stories">
                    <div class="main-stories-title">
                        <span class="main-title">Main Stories</span>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide main-stories-content" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Assets/images/main1.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="tag">Thế giới</span>
                                    <h5>Mỹ lo lắng trước làn sóng mua công ty của Trung Quốc</h5>
                                    <p>22/07/2020</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Assets/images/main2.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="tag">Thế giới</span>
                                    <h5>Hơn 400 lưu học sinh Lào được cách ly</h5>
                                    <p>22/07/2020</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Assets/images/main3.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="tag">Thế giới</span>
                                    <h5>TP HCM đề xuất kéo dài đường Võ Văn Kiệt đến Long An</h5>
                                    <p>22/07/2020</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Assets/images/main4.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="tag">Thế giới</span>
                                    <h5>Trung Quốc khuyến cáo du học sinh ở Mỹ cảnh giác</h5>
                                    <p>22/07/2020</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col col-lg-6 trending-stories">
                    <div class="trending-stories-title">
                        <span class="trending-title">Trend Stories</span>
                    </div>
                    <div class="trending-stories-content grid-container">
                            <div class="grid-item item-1" style="background-image: url() ">
                                <img src="Assets/images/trending1.jpg" alt="">
                                <div class="content">
                                    <span class="tag">Thế giới</span>
                                    <h5>Trung Quốc khuyến cáo du học sinh ở Mỹ cảnh giác</h5>
                                </div>
                            </div>
                        <div class="grid-item item-2" style="background-image: url() ">
                            <img src="Assets/images/trending2.jpg" alt="">
                            <div class="content">
                                <span class="tag">Thế giới</span>
                                <h5>Trung Quốc khuyến cáo du học sinh ở Mỹ cảnh giác</h5>
                            </div>
                        </div>
                        <div class="grid-item item-3" style="background-image: url() ">
                            <img src="Assets/images/trending3.jpg" alt="">
                            <div class="content">
                                <span class="tag">Thế giới</span>
                                <h5>Trung Quốc khuyến cáo du học sinh ở Mỹ cảnh giác</h5>
                            </div>
                        </div>
                        <div class="grid-item item-4" style="background-image: url() ">
                            <img src="Assets/images/trending4.jpg" alt="">
                            <div class="content">
                                <span class="tag">Thế giới</span>
                                <h5>Trung Quốc khuyến cáo du học sinh ở Mỹ cảnh giác</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p>Phổ biến</p>
            <div class="row popular">

                <div class="col col-lg-3 post-item po1">
                    <div class="image">
                        <img src="Assets/images/popular1.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Tin tức</span>
                        <h5>Vì sao vùng cao Hà Giang ngập lụt?</h5>
                    </div>

                </div>
                <div class="col col-lg-3 post-item po2">
                    <div class="image">
                        <img src="Assets/images/popular2.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Tin tức</span>
                        <h5>Vì sao vùng cao Hà Giang ngập lụt?</h5>
                    </div>

                </div>
                <div class="col col-lg-3 post-item po3">
                    <div class="image">
                        <img src="Assets/images/popular3.jpg" alt="">
                    </div>
                    <div class="content">
                        <span class="tag">Tin tức</span>
                        <h5>Vì sao vùng cao Hà Giang ngập lụt?</h5>
                    </div>

                </div>
                <div class="col col-lg-3 post-item po4">

                        <div class="image">
                            <img src="Assets/images/popular4.jpg" alt="">
                        </div>

                    <div class="content">
                        <span class="tag">Tin tức</span>
                        <h5>Vì sao vùng cao Hà Giang ngập lụt?</h5>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="container">
            <div class="row">
                <div class="col col-lg-9 box1" >

                    <section class="technology">
                        <div class="main-post">
                            <img src="Assets/images/tech1.jpg" alt="" class="image">
                            <div class="content">
                                <p class="tag">Công nghệ</p>
                                <h5 class="title">Check & Update your Android version</h5>
                                <span>Nov 19, 2018</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam eros ante, placerat ac pulvinar at, iaculis a quam.
                                    Duis ut risus lobortis diam molestie vehicula. Nunc aliquet lectus at egestas…</p>
                                <p class="author">write by <a href="">Hoangvu</a></p>
                            </div>
                        </div>
                        <div class="posts">
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech2.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech3.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech4.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech5.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                        </div>
                    </section>
                    <p>Thời trang</p>
                    <section class="fashion">
                        <div class="main-post">
                            <img src="Assets/images/tech1.jpg" alt="" class="image">
                            <div class="content">
                                <p class="tag">Thời trang</p>
                                <h5 class="title">Check & Update your Android version</h5>
                                <span>Nov 19, 2018</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam eros ante, placerat ac pulvinar at, iaculis a quam.
                                    Duis ut risus lobortis diam molestie vehicula. Nunc aliquet lectus at egestas…</p>
                                <p class="author">write by <a href="">Hoangvu</a></p>
                            </div>
                        </div>
                        <div class="posts">
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech2.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech3.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech4.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech5.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                        </div>
                    </section>
                    <p>Giáo dục</p>
                    <section class="sport">
                        <div class="main-post">
                            <img src="Assets/images/tech1.jpg" alt="" class="image">
                            <div class="content">
                                <p class="tag">Giáo dục</p>
                                <h5 class="title">Check & Update your Android version</h5>
                                <span>Nov 19, 2018</span>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aliquam eros ante, placerat ac pulvinar at, iaculis a quam.
                                    Duis ut risus lobortis diam molestie vehicula. Nunc aliquet lectus at egestas…</p>
                                <p class="author">write by <a href="">Hoangvu</a></p>
                            </div>
                        </div>
                        <div class="posts">
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech2.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech3.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech4.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-image">
                                    <img src="Assets/images/tech5.jpg" alt="" class="image">
                                </div>
                                <div class="post-content">
                                    <p class="tag">Công nghệ</p>
                                    <h5 class="title">Check & Update your Android version</h5>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col col-lg-3 box2" >
                    <div class="top-story">
                        <p>Top bài viết được xem nhiều nhất</p>
                    </div>
                    <div class="best-story">
                        <p>Top bài biết hay nhất</p>
                    </div>
                    <div class="top-author">
                        <p>Top tác giả hay nhất</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>


</body>
</html>

