<?php
include SYSTEM_PATH."/Model/Category/CategoryModel.php";
include SYSTEM_PATH."/Model/User/UserModel.php";
class HomeController{
    public $categoryModel;
    public $userModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
    }

    function home(){

        $data= $this->categoryModel->getAllCategory();
        require_once SYSTEM_PATH . "\View\home.php";

    }


}
