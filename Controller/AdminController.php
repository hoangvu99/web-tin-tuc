<?php
include SYSTEM_PATH."/Model/Category/CategoryModel.php";
include SYSTEM_PATH."/Model/Post/PostModel.php";
include SYSTEM_PATH."/Model/User/UserModel.php";
include SYSTEM_PATH."/Model/Post/Post.php";
class AdminController{

    public $categoryModel;
    public $userModel;
    public $postModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
    }

    function admin(){
//        $id = $_COOKIE['id'];
//        $user = $this->userModel->getUserById($id);


        require_once SYSTEM_PATH."/View/admin.php";
    }

    function addPost(){

        $title = $_POST['title'];
        $content = $_POST['content'];

        $post = new Post($title,$content);
        $this->postModel->add($title,$content);




    }
}
