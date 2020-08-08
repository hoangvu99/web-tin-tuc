<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/signup.css">

    <title>Home</title>
</head>
<body>
        <section class="dang-ki">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6 offset-lg-3 register-form">
                        <form action="http://localhost/web-tin-tuc/index.php?c=User&a=doSignup" method="post" class="form">
                            <h5 class="title">Đăng kí tài khoản</h5>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control input" name="email" id="email">
                                <span><i class="fas" id="errorEmail-icon"></i><span class="errorEmail error" id="errorEmail"></span></span>
                            </div>
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input type="text" class="form-control input" name="username"  id="username" >

                                <span><i class="fas " id="errorUsername-icon"></i><span class="errorUsername error" id="errorUsername"></span></span>
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control input" name="password" id="password">
                                <i class="fas show-pass fa-eye-slash"></i>
                                <span><i class="fas " id="errorPass-icon"></i><span class="errorPass error" id="errorPass"></span></span>
                            </div>
                            <div class="form-group">
                                <label for="">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control input" name="re-password" id="re-password">
                                <i class="fas show-pass fa-eye-slash"></i>
                                <span><i class="fas" id="error-re-password-icon"></i><span class="errorRePass error" id="error-re-password"></span></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control" disabled id="btn-regis">Đăng kí</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>

<script src="Assets/js/signup.js"></script>


</body>
</html>


