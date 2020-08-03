<?php
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
class ApiController{
    public $userModel;
    public $categoryModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->categoryModel = new CategoryModel();
    }

    function getListUserName(){

        $listUserName= $this->userModel->getListUserName();

        echo json_encode($listUserName);

    }
    function getListCategories(){

        $listCategories = $this->categoryModel->getAllCategory();
        echo json_encode($listCategories);

    }



}
