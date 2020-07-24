<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/User/User.php";
class UserRegisModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function saveUser($email,$username,$password){
        $query = "insert into usersregis (email,username,password) values('$email','$username','$password')";
        $result = parent::excuteQuery($query);
        return $result;
    }

}
