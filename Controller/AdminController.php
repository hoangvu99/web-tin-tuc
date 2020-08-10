<?php
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/PendingPost/PendingPostModel.php";
include_once SYSTEM_PATH."/Model/User/UserRegisModel.php";
include_once SYSTEM_PATH."/Model/Noti/NotiModel.php";
class AdminController{

    public $categoryModel;
    public $userModel;
    public $postModel;
    public $pendingPostModel;
    public $userRegisModel;
    public $notiModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->userModel = new UserModel();
        $this->postModel = new PostModel();
        $this->pendingPostModel= new PendingPostModel();
        $this->userRegisModel = new UserRegisModel();
        $this->notiModel = new NotiModel();

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

        if ($_COOKIE['role'] == "CREATOR"){
//            header("location: http://localhost/web-tin-tuc/index.php?c=admin&v=my-post");
            require_once SYSTEM_PATH."/View/admin.php";
        }else{
            require_once SYSTEM_PATH."/View/admin.php";
        }


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

        $user = $this->userModel->getUserById($userId);
        $this->notiModel->addNoti("1","$user->username đã đăng một bài viết mới");
    }

    function addPost(){
        $listPost = $_POST['listPost'];
        $this->postModel->addPostFromListPendingPost($listPost);

        for ($i = 0 ; $i < count($listPost);$i++){
            $this->notiModel->addNoti($listPost[$i][5],"hoangvu đã phê duyệt bài viết của bạn");
        }

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
    function deleteRegisterById(){
        $id = $_POST['id'];
        $this->userRegisModel->deleteRegisterById($id);
    }

    function addUser(){

        $listRegister = $_POST['data'];
        $this->userModel->addUser($listRegister);
        $this->userRegisModel->deleteRegister($listRegister);
    }


}
