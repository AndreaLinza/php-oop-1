<?php

class Movies
{

    public $title;
    public $year;
    public $description;
    public $category;
    public static $language = "Italiano";
    public $img;


    function __construct(string $_title, string $_category, int $_year,string $_description, string $_img)
    {
        $this->title = $_title;
        $this->category = $_category;
        $this->year = $_year;
        $this->description = $_description;
        $this->img = $_img;
    }

    public function getMovie(){

        return $this->title . '<br>'.  '(' . $this->category . ')';
    }

    public function getFullInfo(){
        return $this->year . ' <br> ' . $this->description;
    }
}
