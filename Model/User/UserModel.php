<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/User/User.php";
class UserModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function getUserByEmail($email){


        $query = "select * from users where email = '$email'";
        $result = parent::excuteQuery($query);
        $user= $result->fetch_object();

       return $user;


        
    }
    function getListUserName(){
        $query = "select name from users";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item[0]);

        }
        return $data;

    }
}
