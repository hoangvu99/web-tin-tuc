<?php
include SYSTEM_PATH."/Model/Category/CategoryModel.php";
include SYSTEM_PATH."/Model/User/UserModel.php";
class AdminController{

    public $categoryModel;
    public $userModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
    }

    function admin(){
        $id = $_COOKIE['id'];
        $user = $this->userModel->getUserById($id);


        require_once SYSTEM_PATH."/View/admin.php";
    }
}
