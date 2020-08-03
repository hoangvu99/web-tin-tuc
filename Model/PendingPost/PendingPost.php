<?php
class PendingPost{

    public $id;
    public $title;
    public $content;
    public $userId;
    public $categoryId;
    public $slug;

    public function __construct($id,$title,$content,$userId,$categoryId,$slug)
    {
        $this->id = $id;
        $this->title=$title;
        $this->content=$content;
        $this->userId=$userId;
        $this->categoryId=$categoryId;
        $this->slug=$slug;
    }


}
