<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/PendingPost/PendingPostModel.php";
include_once SYSTEM_PATH."/Model/User/UserRegisModel.php";
class AdminController{

    public $categoryModel;
    public $userModel;
    public $postModel;
    public $pendingPostModel;
    public $userRegisModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->pendingPostModel= new PendingPostModel();
        $this->userRegisModel = new UserRegisModel();

    }

    function Home(){
        $id = $_COOKIE['id'];
        $user = $this->userModel->getUserById($id);
        $listPendingPosts = $this->pendingPostModel->loadAllPost();
        $listPost = $this->postModel->loadAllPost();
        $categories = $this->categoryModel->getAllCategory();
        $mypost = $this->postModel->loadPostByUserId($id);
        $listUser = $this->userModel->getListUser();
        $listRegister = $this->userRegisModel->loadAllPendingRegis();
        require_once SYSTEM_PATH."/View/admin.php";
    }

    function addPendingPost(){

        $title = $_POST['title'];
        $content = $_POST['content'];
        $slug = $_POST['slug'];
        $categoryId = $_POST['categoryId'];
        $userId = $_POST['userId'];
        $intro = $_POST['intro'];
        $imageThumbnail= $_POST['imageThumbnail'];
        $this->pendingPostModel->add($title,$content,$categoryId,$slug,$userId,$intro,$imageThumbnail);
    }

    function addPost(){
        $listPost = $_POST['listPost'];
        $this->postModel->addPostFromListPendingPost($listPost);
        $this->pendingPostModel->removeListPendingPost($listPost);
    }

    function removePostByPostId(){
        $id = $_POST['id'];
        $this->postModel->removePostByPostId($id);
    }

    function previewpost(){
        $id = $_POST['id'];
        $post = $this->postModel->loadPostByPostId($id);
        echo json_encode($post);
    }
    function deleteUserByUserId(){
        $id = $_POST['id'];
        $this->userModel->deleteUserByUserId($id);
    }

    function addUser(){

        $listRegister = $_POST['data'];
        $this->userModel->addUser($listRegister);
        $this->userRegisModel->deleteRegister($listRegister);
    }


}
