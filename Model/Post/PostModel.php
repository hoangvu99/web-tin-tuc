<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/Post/PostModel.php";
class PostModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function add($title,$content){

        $query = "insert into posts (title,content) values ('$title','$content')";
        $result = parent::excuteQuery($query);

    }

    function loadPostByPostId($postId){
        $query = "select * from posts where id = '$postId'";
        $result = parent::excuteQuery($query);
        $post = $result->fetch_object();
        return $post;
    }


}
