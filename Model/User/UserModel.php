<?php
include_once "../BaseModel.php";
include_once "User.php";
class UserModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();
    }

    function doLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select * from users where email = $email";
        $result = parent::excuteQuery($query);
        
    }
}
