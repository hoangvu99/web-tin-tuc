<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
class HomeController{
    public $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    function home(){
        $data= $this->categoryModel->getAllCategory();
        require_once SYSTEM_PATH . "\View\home.php";

    }
}
