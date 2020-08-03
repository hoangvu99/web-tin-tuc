<?php

class Post{
    public $id;
    public $title;
    public $content;
    public $userId;
    public $categoryId;
    public $slug;
    public $countComment;
    public $countView;
    public $countReaction;
    public $activate;

    public function __construct($id,$title,$content,$userId,$categoryId,$slug,$countComment,$countView,$countReaction)
    {
        $this->id = $id;
        $this->title=$title;
        $this->content=$content;
        $this->userId=$userId;
        $this->categoryId=$categoryId;
        $this->slug=$slug;
        $this->countComment=$countComment;
        $this->countView=$countView;
        $this->countReaction=$countReaction;
    }

}
