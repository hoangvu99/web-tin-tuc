<?php
class BaseModel{

    public $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost' ,'root','1234','webtintuc');
    }

    function excuteQuery($query){
        $result = $this->mysqli->query($query);

        return $result;
}
}