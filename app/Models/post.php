<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'pid';

    /////////////////////////////////////////////////////////
    public $title;
    public $slug;
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
    public function getSlug(){
        return $this->slug;
    }
    public function getCategory(){
        return $this->category;
    }
    public function getDescription(){
        return $this->description;
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
    public function setSlug($slug){
        $this->slug = $slug;
    }
    public function setCategory($category){
        $this->category = $category;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setStatus($status){
        $this->status = $status;
    }
 




}
