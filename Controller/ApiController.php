<?php
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
class ApiController{
    public $userModel;
    public $categoryModel;
    public $postModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->categoryModel = new CategoryModel();
        $this->postModel = new PostModel();
    }

    function getListUserName(){

        $listUserName= $this->userModel->getListUser();

        echo json_encode($listUserName);

    }
    function getListCategories(){

        $listCategories = $this->categoryModel->getAllCategory();
        echo json_encode($listCategories);

    }

    function getListPost(){
        $list = $this->postModel->loadAllPost();
        echo json_encode($list);
    }



}
