<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/PendingPost/PendingPost.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
class PendingPostModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function add($title,$content,$categoryId,$slug,$userId,$intro,$imageThumbnail){

        $query = "insert into pending_post (title,content,category_id,slug,user_id,intro,image_thumbnail) values ('$title','$content','$categoryId','$slug','$userId','$intro','$imageThumbnail')";
        $result = parent::excuteQuery($query);

    }

    function loadPostByPostId($postId){
        $query = "select * from pending_post where id = '$postId'";
        $result = parent::excuteQuery($query);
        $post = $result->fetch_object();
        return $post;
    }

    function  loadAllPost(){
        $userModel = new UserModel();
        $categoryModel = new CategoryModel();
        $query = "select * from pending_post";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            $user = $userModel->getUserById($item[4]);
            $category = $categoryModel->getCategoryById($item[5]);
            $child=[];

            array_push($data,[$item[0],$item[1],$item[2],$item[3],$user,$category,$item[6],$item[7]]);
        }
        return $data;
    }

    function removeListPendingPost($listPendingPost){

        for ($i = 0 ; $i < count($listPendingPost); $i++){
            $id = $listPendingPost[$i][0];
            $query = "delete from pending_post where id = '$id'";
            $result = parent::excuteQuery($query);

        }

    }

    function countPendingPost(){
        
        $query = "select count(id) from pending_post";

        $count = parent::excuteQuery($query);

        return $count->fetch_all()[0][0];
    }


}

