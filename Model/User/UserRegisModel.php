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

    function loadAllPendingRegis(){
        $query = "select * from usersregis";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach ($result->fetch_all() as $item){
            array_push($data,$item);
        }
        return $data;
    }
    function deleteRegisterById($id){
        $query = "delete from usersregis where id = '$id'";
        parent::excuteQuery($query);
    }
    function deleteRegister($listRegister){
        for ($i = 0 ; $i < count($listRegister); $i++){
            $id = $listRegister[$i][0];
            $query = "delete from  usersregis where id = '$id'";
            parent::excuteQuery($query);
        }
    }

}
