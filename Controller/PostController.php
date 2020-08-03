<?php
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
class PostController{
    public $postModel;
    public $categoryModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
    }

    function viewPost(){
        if (isset($_GET['postId'])){
            $postId = $_GET['postId'];
            $data = $this->categoryModel->getAllCategory();
            $post = $this->postModel->loadPostByPostId($postId);
            require_once SYSTEM_PATH."/View/viewPost.php";
        }
    }
}