<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/PendingPost/PendingPostModel.php";

class AdminController{

    public $categoryModel;
    public $userModel;
    public $postModel;
    public $pendingPostModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->pendingPostModel= new PendingPostModel();
    }

    function Home(){
        $id = $_COOKIE['id'];
        $user = $this->userModel->getUserById($id);
        $listPendingPosts = $this->pendingPostModel->loadAllPost();

        require_once SYSTEM_PATH."/View/admin.php";
    }

    function addPendingPost(){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $slug = $_POST['slug'];
        $categoryId = $_POST['categoryId'];
        $userId = $_POST['userId'];
        $this->pendingPostModel->add($title,$content,$categoryId,$slug,$userId);
    }

    function addPost(){
        $listPost = $_POST['listPost'];
        $this->postModel->addPostFromListPendingPost($listPost);
        $this->pendingPostModel->removeListPendingPost($listPost);



    }


}
