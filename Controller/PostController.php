<?php
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Noti/NotiModel.php";
class PostController{
    public $postModel;
    public $categoryModel;
    public $userModel;
    public $notiModel;
    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->notiModel = new NotiModel();
    }

    function viewPost(){
        if (isset($_GET['s'])){
            $slug = $_GET['s'];
            $data = $this->categoryModel->getAllCategory();
            $post = $this->postModel->loadPostBySlug($slug);
            $user = $this->userModel->getUserById($post->user_id);
            $listComment = $this->postModel->getListCommentByPostId($post->id);
            $id = $_COOKIE['id'];
            $listNoti = $this->notiModel->getListNotiByUserId($id);
            $this->postModel->updateView($post->id);
            require_once SYSTEM_PATH."/View/viewPost.php";
        }
    }

    function addComment(){

        $postid = $_POST['postid'];
        $userid = $_POST['userid'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $this->postModel->addComment($userid,$postid,$name,$content);
        $post = $this->postModel->loadPostByPostid($postid);
        $user = $this->userModel->getUserById($post->user_id);
        $u = $this->userModel->getUserById($userid);
        $notiText = "$u->username đã bình luận vào bài viết của bạn";
        $this->notiModel->addNoti($user->id,$notiText);
        $this->postModel->updateComment($postid);

    }

    function addReplyComment(){
        $postid = $_POST['postid'];
        $userid = $_POST['userid'];
        $name = $_POST['username'];
        $content = $_POST['content'];
        $commentid = $_POST['commentid'];
        $this->postModel->addReplyComment($userid,$postid,$name,$content,$commentid);
        $this->postModel->updateComment($postid);
        $comment = $this->postModel->getCommentByCommentId($commentid);
        $user = $this->userModel->getUserById($comment->user_id);
        $notiText = "$name đã phản hồi bình luận của bạn";
        $this->notiModel->addNoti($user->id,$notiText);



    }
}