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

    function getUserById($id){
        $query = "select * from users where id = '$id'";
        $result = parent::excuteQuery($query);
        $user = $result->fetch_object();
        return $user;
    }

    function getUserIdByEmail($email){

        $query = "select id from users where email = '$email'";
        $result = parent::excuteQuery($query);
        $id=0;
        foreach ($result->fetch_all() as $item){
            $id = $item[0];
        }
        return $id;


    }

    function editUser($email,$username,$password,$gender){

        $id = $this->getUserIdByEmail($email);

        $query = "update users set username = '$username',password = '$password',gender = '$gender' where id = '$id'" ;
        $result = parent::excuteQuery($query);

        if($result){
            return" cập nhập thành công";
        }
        return "cập nhập thất bại";
    }
}
