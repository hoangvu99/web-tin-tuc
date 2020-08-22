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

    function loadPostBySlug($slug){
        $query = "select * from posts where slug = '$slug'";
        $result = parent::excuteQuery($query);
        $post = $result->fetch_object();
        return $post;
    }

    function countPost(){
        $query = "select count(id) from posts";
        $result = parent::excuteQuery($query);
        $countPost = $result->fetch_all()[0][0];
        return $countPost;
    }

    function loadPostByPostid($postid){
        $query = "select * from posts where id = '$postid'";
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

    function loadPostByUserId($userId){
        $query = "select * from posts where user_id = '$userId'";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }

    function loadLatestPost(){
        $query = "select * from posts order by id desc";
        $result = parent::excuteQuery($query);
        $data = $result->fetch_all()[0];
        $categoryModel = new CategoryModel();
        $category = $categoryModel->getCategoryById($data[1]);
        array_push($data,$category);
        return $data;
    }

    function loadListTrendingPost(){
        $query = "select * from posts order by count_view desc limit 5";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }

    function loadListPopularPost(){
        $query = "select * from posts order by count_reaction desc limit 4";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }

    function loadListBussinessPost(){
        $query = "select * from posts where category_id='3'  limit 5";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }

    function loadListSportPost(){
        $query = "select * from posts where category_id='4'  limit 5";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }
    function loadListEntertaimentPost(){
        $query = "select * from posts where category_id='5'  limit 5";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }

    function loadListCovid19Post(){
        $query = "select * from posts where category_id='12'";
        $result = parent::excuteQuery($query);
        $data = [];
        $categoryModel = new CategoryModel();

        foreach ($result->fetch_all() as $item){
            $category = $categoryModel->getCategoryById($item[1]);
            array_push($item,$category);
            array_push($data,$item);

        }
        return $data;
    }

    function getListTitle(){
        $query = "select * from posts";
        $result = parent::excuteQuery($query);
        $data=[];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }

    function editSlug($list){
        for ($i = 0 ; $i < count($list);$i++){
            $id = $list[$i][0];
            $slug = $list[$i][1];
            $query = "update posts set slug ='$slug' where id = '$id'";
            parent::excuteQuery($query);
        }
    }

    function addComment($userid,$postid,$name,$content){

        $username = $name;
        if ($username == ""){
            $userModel = new UserModel();
            $username = $userModel->getUserById($userid)->username;
        }

        $query = "insert into comments (user_id,post_id,content,username) values('$userid','$postid','$content','$username')";
        parent::excuteQuery($query);

    }

    function getListCommentByPostId($postid){
        $query = "select * from comments where post_id = '$postid'";
        $result = parent::excuteQuery($query);
        $data = [];
        $userModel = new UserModel();
        foreach ($result->fetch_all() as $item){
            $user = $userModel->getUserById($item[1]);

            $listReply = $this->getListReplyCommentByCommentId($item[0]);
            array_push($item,$user);
            array_push($item,$listReply);
            array_push($data,$item);
        }
        return $data;
    }

    function addReplyComment($userid,$postid,$username,$content,$commentid){
        $query = "insert into comment_reply (user_id,post_id,comment_id,username,content) values('$userid','$postid','$commentid','$username','$content')";
        parent::excuteQuery($query);
    }

    function getListReplyCommentByCommentId($commentid){
        $query = "select * from comment_reply where comment_id ='$commentid'";
        $result = parent::excuteQuery($query);
        $data = [];
        $userModel = new UserModel();
        foreach ($result->fetch_all() as $item){
            $user = $userModel->getUserById($item[5]);
            array_push($item,$user);
            array_push($data,$item);
        }
        return $data;

    }

    function getCommentByCommentId($commentid){
        $query = "select * from comments where id = '$commentid'";
        $result = parent::excuteQuery($query);
        $comment = $result->fetch_object();
        return $comment;
    }

    function updateView($postid){
        $query = "update posts p set count_view = p.count_view+1 where id='$postid'";
        parent::excuteQuery($query);
    }

    function updateComment($postid){
        $query = "update posts p set count_comment = p.count_comment+1 where id='$postid'";
        parent::excuteQuery($query);
    }

    function getListPostByCategoryId($categoryId){
        $query = "select * from posts where category_id = '$categoryId'";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }


}
