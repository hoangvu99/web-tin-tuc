<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/User/UserRegisModel.php";
class UserController {

    public $categoryModel;
    public $userModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->userRegisModel = new UserRegisModel();
    }

    function doLogin(){
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->getUserByEmail($email);

            if($user->password == $password){
                $expire = time()+60*60*24*30;
                setcookie("id",$user->id,$expire);
                setcookie("name",$user->username,$expire);
                setcookie("role",$user->role,$expire);
                setcookie("avatar",$user->avatar,$expire);
                header("location: http://localhost/web-tin-tuc/index.php");
            }else {
                echo "dang nhap that bai";
            }
        }else{
            echo "that bai";
        }

    }
    function doLogout(){
        setcookie("name", "", time() - 3600);
        setcookie("avatar", "", time() - 3600);
        setcookie("id", "", time() - 3600);
        setcookie("role","",time()-3600);
        header("location: http://localhost/web-tin-tuc/index.php");
    }

    function signUp(){
        $data= $this->categoryModel->getAllCategory();
        require_once SYSTEM_PATH."/View/signup.php";
    }

    function profile(){

    }

    function doSignup(){
        $data= $this->categoryModel->getAllCategory();
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $this->userRegisModel->saveUser($email,$username,$password);

        require_once SYSTEM_PATH."/View/signupsucess.php";
    }

    function doEdit(){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $result = $this->userModel->editUser($email,$username,$password,$gender);

    }

}
