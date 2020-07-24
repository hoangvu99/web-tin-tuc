<?php
include_once SYSTEM_PATH."/Model/User/UserModel.php";
class ApiController{
    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function getListUserName(){

        $listUserName= $this->userModel->getListUserName();

        echo json_encode($listUserName);

    }

}
