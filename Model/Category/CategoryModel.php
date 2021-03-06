<?php
include_once SYSTEM_PATH."/Model/BaseModel.php";
include_once SYSTEM_PATH."/Model/Category/Category.php";
class CategoryModel extends BaseModel {

    public function __construct()
    {
        parent::__construct();

    }

    public function getAllCategory(){
        $query = "select * from categories";
        $result = parent::excuteQuery($query);
        $data = [];
        foreach($result->fetch_all() as $item ){
            array_push($data,new Category($item[0],$item[1],$item[2],$item[3],$item[4],$item[5]));
        }
        return $data;

    }

    public function getCategoryById($id){
        $query = "select * from categories where id = '$id'";
        $result = parent::excuteQuery($query);
        $category = $result->fetch_object();
        return $category;
    }

    public function getCategoryByName($name){
        $query = "select id from categories where name ='$name'";
        $result = parent::excuteQuery($query);
        $categoryId = -1;
        foreach ($result->fetch_all() as $value){
            $categoryId = $value;
        }
        return $categoryId;
    }



}
