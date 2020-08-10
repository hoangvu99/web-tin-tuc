<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
class NotiModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function addNoti($userid,$content){
        $query = "insert into noti (user_id,content) values ('$userid','$content')";
        parent::excuteQuery($query);
    }

    function getListNotiByUserId($userid){
        $query = "select * from noti  where user_id ='$userid' ";
        $result = parent::excuteQuery($query);
        $data=[];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }



}
