<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'page_id';



    
    /////////////////////////////////////////////////////////
    public $title;
    public $slug;
    public $description;
    public $status;

    public function getTitle(){
        return $this->title;
    }
    public function getSlug(){
        return $this->slug;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setSlug($slug){
        $this->slug = $slug;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setStatus($status){
        $this->status = $status;
    }
 
}
