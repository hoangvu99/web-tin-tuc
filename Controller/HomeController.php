<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
class HomeController{
    public $categoryModel;
    public $userModel;
    public $postModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
    }

    function home(){

        if (isset($_GET['view'])){
            $view = $_GET['view'];
        }else{
            $data= $this->categoryModel->getAllCategory();
            require_once SYSTEM_PATH . "\View\home.php";
        }



    }



}
