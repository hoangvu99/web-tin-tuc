<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/Noti/NotiModel.php";

class HomeController{
    public $categoryModel;
    public $userModel;
    public $postModel;
    public $notiModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->notiModel = new NotiModel();
    }

    function home(){
        $id = $_COOKIE['id'];
        $listNoti = $this->notiModel->getListNotiByUserId($id);
        $data= $this->categoryModel->getAllCategory();
        if (isset($_GET['categoryid'])){
            $id = $_GET['categoryid'];
            $categoryname = $_GET['categoryname'];
            $listPostByCategoryId = $this->postModel->getListPostByCategoryId($id);
            require_once SYSTEM_PATH."/View/postbycategory.php";
        }else {

            $latestPost = $this->postModel->loadLatestPost();
            $listTrendingPost = $this->postModel->loadListTrendingPost();
            $listPPPost = $this->postModel->loadListPopularPost();
            $listBussinessPost = $this->postModel->loadListBussinessPost();
            $listSportPost = $this->postModel->loadListSportPost();
            $listEntertainPost = $this->postModel->loadListEntertaimentPost();
            $listCovid19Post = $this->postModel->loadListCovid19Post();

            require_once SYSTEM_PATH . "/View/home.php";
        }



    }



}
