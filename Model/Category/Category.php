<?php
class Category {

    public $id;
    public $name;
    public $tag;
    public $description;
    public $icon;
    public $active;

    public function __construct($id,$name,$tag,$description,$icon,$active)
    {
        $this->id = $id;
        $this->name=$name;
        $this->tag=$tag;
        $this->description=$description;
        $this->icon=$icon;
        $this->active=$active;

    }
}
