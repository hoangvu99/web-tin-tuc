<?php

class Post{
    public $id;
    public $categoryId;
    public $title;
    public $intro;
    public $content;
    public $countComment;
    public $slug;
    public $userId;



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
