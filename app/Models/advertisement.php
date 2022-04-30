<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    protected $table = 'advertisements';
    protected $primaryKey = 'aid';


    
    /////////////////////////////////////////////////////////
    public $title;
    public $url;
    public $image;
    public $category;
    public $description;
    public $status;

    public function getImage(){
        return $this->image;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getUrl(){
        return $this->url;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setUrl($url){
        $this->url = $url;
    }
    public function setLocation($location){
        $this->location = $location;
    }
    public function setStatus($status){
        $this->status = $status;
    }
 

}
