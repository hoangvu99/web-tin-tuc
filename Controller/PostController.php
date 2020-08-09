<?php
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
class PostController{
    public $postModel;
    public $categoryModel;
    public $userModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
    }

    function viewPost(){
        if (isset($_GET['s'])){
            $slug = $_GET['s'];
            $data = $this->categoryModel->getAllCategory();
            $post = $this->postModel->loadPostByPostId($slug);
            $user = $this->userModel->getUserById($post->user_id);
            $listComment = $this->postModel->getListCommentByPostId($post->id);
            require_once SYSTEM_PATH."/View/viewPost.php";
        }
    }

    function addComment(){

        $postid = $_POST['postid'];
        $userid = $_POST['userid'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $this->postModel->addComment($userid,$postid,$name,$content);

    }

    function addReplyComment(){
        $postid = $_POST['postid'];
        $userid = $_POST['userid'];
        $name = $_POST['username'];
        $content = $_POST['content'];
        $commentid = $_POST['commentid'];
        $this->postModel->addReplyComment($userid,$postid,$name,$content,$commentid);
    }
}