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
                <a href="http://localhost/web-tin-tuc/index.php" class="box-logo">
                    <i class="fas fa-gem"></i>
                </a>
            </div>

            <div class="navigation-bar">
                <ul class="nav-menu nav">

<!--                    <li class="nav-item">-->
<!--                        <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=pending-comment" class="nav-link" id="">-->
<!--                            <i class="fas fa-comments icon"></i>-->
<!--                            <span class="text">Phê duyệt bình luận</span>-->
<!--                        </a>-->
<!--                    </li>-->


                <?php
                    if ($_COOKIE['role'] == "ADMIN"){
                        ?>
                        <li class="nav-item">
                            <a  href="http://localhost/web-tin-tuc/index.php?c=admin&v=home" class="nav-link" >
                                <i class="fas fa-home icon"></i>
                                <span class="text">Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=edit-profile" class="nav-link" >
                                <i class="fas fa-user-edit icon"></i>
                                <span class="text">Chỉnh sửa thông tin</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=my-post"  class="nav-link" id="">
                                <i class="fas fa-address-card icon"></i>
                                <span class="text">Bài viết của bạn</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=add-post"  class="nav-link" id="">
                                <i class="fas fa-pen-alt icon"></i>
                                <span class="text">Thêm bài viết</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="http://localhost/web-tin-tuc/index.php?c=admin&v=pending-post" class="nav-link" id="">
                                <i class="fas fa-business-time icon"></i>
                                <span class="text">Bài viết chờ phê duyệt</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=list-post" class="nav-link" id="">
                                <i class="fas fa-list-alt icon "></i>
                                <span class="text">Danh sách bài viết</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=user" class="nav-link" id="">
                                <i class="fas fa-users icon" ></i>
                                <span class="text">Thành viên</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=pending-regis" class="nav-link" id="">
                                <i class="fas fa-user-plus icon"></i>
                                <span class="text">Yêu cầu đăng kí</span>
                            </a>
                        </li>
                    <?php
                    }else {
                       ?>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=edit-profile" class="nav-link" >
                                <i class="fas fa-user-edit icon"></i>
                                <span class="text">Chỉnh sửa thông tin</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=my-post"  class="nav-link" id="">
                                <i class="fas fa-address-card icon"></i>
                                <span class="text">Bài viết của bạn</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/web-tin-tuc/index.php?c=admin&v=add-post"  class="nav-link" id="">
                                <i class="fas fa-pen-alt icon"></i>
                                <span class="text">Thêm bài viết</span>
                            </a>
                        </li>



                    <?php
                    }

                ?>


                </ul>
            </div>

        </div>
        <div class="content">
            <div class="head">
                <img  style="width: 50px;height: 50px;border-radius: 50% ; margin-left: 95%" src="Assets/images/<?=$user->avatar?>" alt="">
                <p style="display: none" id="user-id"><?= $user->id ?></p>

            </div>
            <div class="box-content">
                <div class="home box" id="home">
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
                <div class="edit-profile box" id="edit-profile">
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
                <div class="my-post box" id="my-post">
                    <div class="filter">
                        <div class="fill">
                            <select name="" id="fill" class="form-control">
                                <option value="0">Tất cả</option>
                                <?php
                                foreach ($categories as $item){
                                    ?>
                                    <option value="<?=$item->id?>"> <?=$item->name?></option>
                                    <?php
                                }

                                ?>

                            </select>

                            <select name="" id="sort" class="form-control">
                                <option value="1">Cũ nhất</option>
                                <option value="2">Mới nhất</option>
                                <option value="2">Tương tác cao nhất</option>
                            </select>
                        </div>

                    </div>
                    <div class="grid-container">
                        <?php
                        foreach ($mypost as $post){
                            ?>
                            <div class="grid-item" data-postid="<?= $post[0] ?>" data-categoryId="<?= $post[1] ?>">

                                <div class="list-post-item">
                                    <div class="box-wrapp-button-remove"> <i class='fas fa-trash-alt button-remove-post' ></i></div>
                                    <div class="image-thumbnail">
                                        <span><?= $post[11] ?></span>
                                    </div>
                                    <div class="post-detail">
                                        <h5 class="title-post"><?= $post[2] ?></h5>
                                        <p class="intro-post"><?= $post[3] ?>...</p>

                                    </div>
                                    <div class="reaction">
                                        <div class="reaction-item" style="justify-content: normal;width: 40%">

                                        </div>
                                        <div class="reaction-item" style="width: 20%">
                                            <span><i class="fas fa-eye"></i><?= $post[9] ?></span>
                                        </div>
                                        <div class="reaction-item" style="width: 20%">
                                            <span><i class="far fa-heart"></i><?= $post[10] ?></span>
                                        </div>
                                        <div class="reaction-item" style="width: 20%">
                                            <span><i class="far fa-comment"></i><?= $post[5] ?></span>
                                        </div>




                                    </div>
                                </div>

                            </div>
                            <?php
                        }

                        ?>
                    </div>
                </div>
                <div class="add-post box" id="add-post">
                    <div class="tools">

                        <button class="btn btn-danger" id="btn-create"><i class="fas fa-plus"></i></button>
                        <button class="btn btn-danger" id="btn-category"><i class="fas fa-mouse-pointer"></i></button>
                        <button class="btn btn-danger" id="btn-title"><i class="fas fa-heading"></i></button>
                        <button class="btn btn-danger" id="btn-slug"><i class="fas fa-bookmark"></i></button>
                        <button class="btn btn-danger" id="btn-intro"><i class="fab fa-invision"></i></button>

                        <button class="btn btn-danger" id="btn-image"><i class="fas fa-images"></i></button>
                        <button class="btn btn-danger" id="btn-text"><i class="fas fa-align-justify"></i></button>

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
                <div class="pending-post box" id="pending-post">
                    <button class="btn btn-info" id="btn-approval-pending-post"><i class="fas fa-check-circle"></i></button>
                    <div class="data-table">
                        <table class="table pending-post-table table-bordered">
                            <thead>
                                <tr>
                                    <th class="th-checkbox"><input class="pending-post-all" id="pending-post-all" type="checkbox"></th>
                                    <th class="th-stt">STT</th>
                                    <th class="th-title">Tiêu đề</th>
                                    <th class="th-intro">Nội dung</th>
                                    <th class="th-author">Tác giả</th>
                                    <th class="th-category">Thể loại</th>

                                </tr>
                                <tbody class="tbody">
                                    <?php
                                        for ($i = 0 ; $i < count($listPendingPosts);$i++){
                                            ?>
                                            <tr>
                                                <td class="td-checkbox"><input class="pending-post-item" type="checkbox"></td>
                                                <td class="td-stt" data-ppid=<?= $listPendingPosts[$i][0] ?>><?=$i+1?></td>
                                                <td class="td-title" data-slug="<?= $listPendingPosts[$i][3] ?>" ><?= $listPendingPosts[$i][1] ?></td>
                                                <td class="td-content" data-imagethumbnail='<?=$listPendingPosts[$i][7]?>' data-intro="<?= $listPendingPosts[$i][6] ?>"><?=$listPendingPosts[$i][2]?></td>
                                                <td class="td-author" data-userid=<?= $listPendingPosts[$i][4]->id?> >
                                                    <a href="http://localhost/web-tin-tuc/index.php?c=user&a=getUserByUserId&userId=<?= $listPendingPosts[$i][4]->id?>"><?= $listPendingPosts[$i][4]->username?></a>
                                                </td>
                                                <td class="td-category"  data-categoryid=<?= $listPendingPosts[$i][5]->id?>><?= $listPendingPosts[$i][5]->name?></td>

                                            </tr>
                                    <?php
                                    }
                                    ?>

                            </tbody>
                            </thead>
                        </table>
                    </div>


                </div>
                <div class="list-post box" id="list-post">
                    <div class="filter">
                       <div class="fill">
                           <select name="" id="post-fill" class="form-control">
                               <option value="0">Tất cả</option>
                               <?php
                                    foreach ($categories as $item){
                                        ?>
                                        <option value="<?=$item->id?>"> <?=$item->name?></option>
                               <?php
                                    }

                               ?>

                           </select>

                           <select name="" id="sort" class="form-control">
                               <option value="1">Cũ nhất</option>
                               <option value="2">Mới nhất</option>
                               <option value="2">Tương tác cao nhất</option>
                           </select>
                       </div>

                    </div>
                    <div class="grid-container">
                        <?php
                            foreach ($listPost as $post){
                                ?>
                                <div class="grid-item" data-postid="<?= $post[0] ?>" data-categoryId="<?= $post[1] ?>">

                                        <div class="list-post-item">
                                           <div class="box-wrapp-button-remove"> <i class='fas fa-trash-alt button-remove-post' ></i></div>
                                            <div class="image-thumbnail">
                                                <span><?= $post[11] ?></span>
                                            </div>
                                            <div class="post-detail">
                                                <h5 class="title-post"><?= $post[2] ?></h5>
                                                <p class="intro-post"><?= $post[3] ?>...</p>

                                            </div>
                                            <div class="reaction">
                                                <div class="reaction-item" style="justify-content: normal;width: 40%">

                                                </div>
                                                <div class="reaction-item" style="width: 20%">
                                                    <span><i class="fas fa-eye"></i><?= $post[9] ?></span>
                                                </div>
                                                <div class="reaction-item" style="width: 20%">
                                                    <span><i class="far fa-heart"></i><?= $post[10] ?></span>
                                                </div>
                                                <div class="reaction-item" style="width: 20%">
                                                    <span><i class="far fa-comment"></i><?= $post[5] ?></span>
                                                </div>




                                            </div>
                                        </div>

                                </div>
                        <?php
                            }

                        ?>
                    </div>

                </div>
                <div class="user box" id="user">
                        <div class="table-data-user">
                            <div class="fillter">
                                <select name="" class="user-filler form-control" id="user-fill">
                                    <option value="all">Tất cả</option>
                                    <option value="ADMIN">Admin</option>
                                    <option value="CREATOR">Creator</option>
                                    <option value="USER">User</option>
                                </select>
                                <input type="text" class="form-control" id="user-search" placeholder="Nhập tên người dùng">

                            </div>
                            <table class="table table-bordered table-light">
                                <thead>
                                    <tr>
                                        <th class="th-stt">STT</th>
                                        <th class="th-email">Email</th>
                                        <th class="th-username">User Name</th>
                                        <th class="th-gender">Giới tính</th>
                                        <th class="th-permission">Permission</th>
                                        <th class="th-state">State</th>
                                        <th class="th-remove"></th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    <?php
                                        for ($i = 0 ; $i < count($listUser) ; $i++){
                                            ?>
                                        <tr class="user-object" data-permission="<?= $listUser[$i][6]?>">
                                            <td><?= $i+1?></td>
                                            <td><?= $listUser[$i][2]?></td>
                                            <td><?= $listUser[$i][1]?></td>
                                            <td><?= $listUser[$i][4]?></td>
                                            <td><?= $listUser[$i][6]?></td>
                                            <td><?php if ($listUser[$i][7] == 1){
                                                    echo"<i class='fas fa-circle' style='color: #00ff00'></i>";
                                                }else{
                                                    echo"<i class='fas fa-circle' style='color: red'></i>";
                                                }?>
                                            </td>
                                            <td><i data-userid="<?= $listUser[$i][0]?>" class="fas fa-trash-alt remove-user"></i></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                </div>
                <div class="pending-regis box" id="pending-regis">
                    <div class="table-data-user">
                        <div class="fillter">

                            <input type="text" class="form-control register-search" id="register-search" placeholder="Nhập tên người dùng">
                            <button class="btn btn-danger" id="approval-register">Phê duyệt</button>
                            <button class="btn btn-danger" id="approval-all-register">Phê duyệt tất cả</button>
                        </div>
                        <table class="table table-bordered table-light">
                            <thead>
                            <tr>
                                <th class="th-stt">STT</th>
                                <th class="th-email">Email</th>
                                <th class="th-username">User Name</th>
                                <th class="th-gender">Password</th>
                                <th class="th-permission">Permission</th>
                                <th class="th-state">State</th>
                                <th class="th-remove"></th>
                                <th class="th-check-box"><input type="checkbox" class="form-control register-checkbox-all"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($i = 0 ; $i < count($listRegister) ; $i++){
                                ?>
                                <tr class="register-object" data-permission="<?= $listUser[$i][6]?>">
                                    <td data-registerid="<?= $listRegister[$i][0]?>"><?= $i+1?></td>
                                    <td><?= $listRegister[$i][1]?></td>
                                    <td><?= $listRegister[$i][2]?></td>
                                    <td><?= $listRegister[$i][3]?></td>
                                    <td><select name="" class="form-control" id="">
                                            <option value="USER">User</option>
                                            <option value="CREATOR">Creator</option>
                                            <option value="ADMIN">Admin</option>
                                        </select>
                                    </td>
                                    <td>Đang chờ phê duyệt</td>
                                    <td><i data-registerid="<?= $listRegister[$i][0]?>" class="fas fa-trash-alt remove-register"></i></td>
                                    <td><input type="checkbox" class="form-control register-checkbox"> </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <div class="modal-view-post-item" id="modal-view-post-item">
            <div class="post-content">
                <button class="btn btn-danger" id="btn-close-post"><i class="fas fa-times"></i></button>
                <div class="post-header">
                    <h3 class="title-post" id="title-post"></h3>
                    <h5 class="intro-post" id="intro-post"></h5>
                </div>
                <div class="post-body">
                    <p class="post-text" id="post-text"></p>
                </div>

            </div>

        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/admin/admin.js"></script>
    <script src="Assets/js/admin/edit.js"></script>
    <script src="Assets/js/admin/addpost.js"></script>
    <script src="Assets/js/admin/pendingpost.js"></script>
    <script src="Assets/js/admin/listpost.js"></script>
    <script src="Assets/js/admin/listuser.js"></script>
    <script src="Assets/js/admin/register.js"></script>

</body>
</html>
