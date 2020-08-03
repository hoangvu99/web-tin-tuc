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
            array_push($data,new Post($item[0],$item[2],$item[4],$item[1],$item[9],$item[8],$item[12],$item[13]));
        }
        return $data;
    }

    function addPostFromListPendingPost($listPendingPost){

        for ($i = 0 ; $i < count($listPendingPost); $i++){
            $title = $listPendingPost[$i][1];
            $content = $listPendingPost[$i][2];
            $userId = $listPendingPost[$i][3];
            $categoryId = $listPendingPost[$i][4];
            $query = "insert into posts (title,content,user_id,category_id) values ('$title','$content','$userId','$categoryId')";
            $result = parent::excuteQuery($query);

        }
    }


}
