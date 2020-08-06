<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/Post/Post.php";
include_once SYSTEM_PATH."/Model/User/UserModel.php";
include_once SYSTEM_PATH."/Model/Category/CategoryModel.php";
class PostModel extends BaseModel {


    public function __construct()
    {
        parent::__construct();

    }

    function add($title,$content,$categoryId,$slug){

        $query = "insert into posts (title,content,category_id,slug) values ('$title','$content','$categoryId','$slug')";
        $result = parent::excuteQuery($query);

    }

    function loadPostByPostId($postId){
        $query = "select * from posts where id = '$postId'";
        $result = parent::excuteQuery($query);
        $post = $result->fetch_object();
        return $post;
    }

    function  loadAllPost(){

        $query = "select * from posts";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }

    function addPostFromListPendingPost($listPendingPost){

        for ($i = 0 ; $i < count($listPendingPost); $i++){
            $title = $listPendingPost[$i][1];
            $slug = $listPendingPost[$i][2];
            $intro = $listPendingPost[$i][3];
            $content = $listPendingPost[$i][4];
            $userId = $listPendingPost[$i][5];
            $categoryId = $listPendingPost[$i][6];
            $imagethumbnail = $listPendingPost[$i][7];
            $query = "insert into posts (title,slug,intro,content,user_id,category_id,image_thumbnail,count_comment,count_view,count_reaction) values ('$title','$slug','$intro','$content','$userId','$categoryId','$imagethumbnail','0','0','0')";
            parent::excuteQuery($query);

        }
    }

    function removePostByPostId($id){
        $query = "delete from posts where id='$id'";
        parent::excuteQuery($query);
    }


}
