<?php
class Category{
    // Thuộc tính

    private $cat_id;
    private $cat_name;


    public function __construct($cat_id,$cat_name){
        $this->cat_id = $cat_id;
        $this->cat_name = $cat_name;
    }

    // Setter và Getter
    public function getCat_id(){
        return $this->cat_id;
    }

    public function setCat_id($cat_id)
    {
        $this->cat_id = $cat_id;
    }
    public function getCat_name(){
        return $this->cat_name;
    }

    public function setCat_name($cat_name){
        $this->cat_name = $cat_name;
    }

}