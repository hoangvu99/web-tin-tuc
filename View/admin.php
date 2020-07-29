<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/admin.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="slider">
            <div class="logo">
                <a href="https://www.facebook.com/VuAndre99/" class="box-logo">
                    <i class="fas fa-gem"></i>
                </a>
            </div>

            <div class="navigation-bar">
                <ul class="nav-menu nav">
                    <li class="nav-item">
                        <a  class="nav-link" id="home">
                            <i class="fas fa-home icon"></i>
                            <span class="text">Trang chủ</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="edit-profile" >
                            <i class="fas fa-user-edit icon"></i>
                            <span class="text">Chỉnh sửa thông tin</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a  class="nav-link" id="my-post">
                            <i class="fas fa-address-card icon"></i>
                            <span class="text">Bài viết của bạn</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="add-post">
                            <i class="fas fa-pen-alt icon"></i>
                            <span class="text">Thêm bài viết</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="pending-post">
                            <i class="fas fa-business-time icon"></i>
                            <span class="text">Bài viết chờ phê duyệt</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="list-post">
                            <i class="fas fa-list-alt icon "></i>
                            <span class="text">Danh sách bài viết</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="user">
                            <i class="fas fa-users icon" ></i>
                            <span class="text">Thành viên</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="pending-regis">
                            <i class="fas fa-user-plus icon"></i>
                            <span class="text">Yêu cầu đăng kí</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" id="pending-comment">
                            <i class="fas fa-comments icon"></i>
                            <span class="text">Phê duyệt bình luận</span>
                        </a>
                    </li>



                </ul>
            </div>

        </div>
        <div class="content">
            <div class="head">
                <input type="text" class="form-control search-box" id="search-box" placeholder="Tìm kiếm...">
            </div>
            <div class="box-content">
                <div class="home box">
                   <div class="box-noti">
                       <div class="box-noti-item">
                           <p>Số lượng thành viên</p>
                           <span>1</span>
                       </div>
                       <div class="box-noti-item">
                           <p>Số lượng bài viết</p>
                           <span>1</span>
                       </div>
                       <div class="box-noti-item">
                           <p>Bài viết cần duyệt</p>
                           <span>1</span>
                       </div>
                       <div class="box-noti-item">
                           <p>Thành viên cần phê duyệt</p>
                           <span>1</span>
                       </div>
                       <div class="box-noti-item">
                           <p>Bình luận cần phê duyệt</p>
                           <span>1</span>
                       </div>
                   </div>

                </div>
                <div class="edit-profile box">
                    <section class="edit">
                        <div class="image-button">
                            <img src="Assets/images/<?=$user->avatar?>" alt="">
                            <div class="button">
                                <form action="">
                                    <button class="btn">Thay đổi ảnh đại diện</button>
                                </form>
                            </div>
                        </div>
                        <div class="edit-form" >
                            <form class="form" >
                                <div class="form-group ">
                                    <label for="">Tài khoản Email</label>
                                    <input type="text" value="<?=$user->email?>" id="email" readonly class="form-control">
                                </div>
                                <div class="form-group ">
                                    <label for="">Username</label>
                                    <input type="text" value="<?=$user->username?>" id="username" class="form-control">
                                </div>
                                <div class="form-group pass-input">
                                    <label for="">Password</label>
                                    <input type="password" value="<?=$user->password?>" id="password" class="form-control">
                                    <i class="fas eye fa-eye-slash" id="eye"></i>
                                </div>

                                <div class="form-group ">

                                    <label for="">Giới tính</label>
                                    <br>
                                    <input type="radio" id="male" name="gender" <?= ($user->gender == 'nam')? "checked":"" ?> value="nam">
                                    <label for="male">Nam</label><br>
                                    <input type="radio" id="female" name="gender" <?= ($user->gender == 'nữ')? "checked":"" ?>value="nữ">
                                    <label for="female">Nữ</label><br>
                                    <input type="radio" id="other" name="gender" <?= ($user->gender == 'khác')? "checked":"" ?> value="khác">
                                    <label for="other">Other</label>
                                </div>

                            </form>


                                <button type="submit" class="btn form-control bt" id="edit-btn">Chỉnh sửa</button>

                        </div>
                    </section>

                </div>
                <div class="my-post box"></div>
                <div class="add-post box">
                    <div class="tools">
                        <button class="btn btn-danger" id="btn-create"><i class="fas fa-plus"></i></button>
                        <button class="btn btn-danger" id="btn-title"><i class="fas fa-heading"></i></button>
                        <button class="btn btn-danger" id="btn-image"><i class="fas fa-images"></i></button>
                        <button class="btn btn-danger" id="btn-text"><i class="fas fa-align-justify"></i></button>
                        <button class="btn btn-danger" id="btn-slug"><i class="fas fa-bookmark"></i></button>
                        <button class="btn btn-danger" id="btn-save"><i class="fas fa-save"></i></button>
                        <button class="btn btn-danger" id="btn-clear"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <section class="section-post">
                        <div class="post" id="post">
                            <table class="table table-new-post">
                                <thead>
                                <tr>
                                    <th class="type">Loại</th>
                                    <th class="content">Nội dung</th>
                                    <th class="delete">Tùy chọn</th>
                                </tr>
                                </thead>
                                <tbody id="form-create-post">



                                </tbody>
                            </table>
                        </div>
                    </section>


                </div>
                <div class="pending-post box">4</div>
                <div class="list-post box">5</div>
                <div class="user box">6</div>
                <div class="pending-regis box">7</div>
                <div class="pending-comment box">8</div>
            </div>

        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/admin/admin.js"></script>
    <script src="Assets/js/admin/edit.js"></script>
    <script src="Assets/js/admin/addpost.js"></script>
</body>
</html>
