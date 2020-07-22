<?php

class User{
    public $id;
    public $name;
    public $email;
    public $password;
    public $gender;
    public $dateofbirth;

    public function __construct($id,$name,$email,$password,$gender,$dateofbirth)
    {
        $this->id=$id;
        $this->name = $name;
        $this->email=$email;
        $this->password=$password;
        $this->gender=$gender;
        $dateofbirth=$dateofbirth;
    }
}
