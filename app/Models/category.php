<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $primarykey = 'cid';



    
    /////////////////////////////////////////////////////////
    public $title;
    public $slug;
    public $status;

    public function getTitle(){
        return $this->title;
    }
    public function getSlug(){
        return $this->slug;
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
    public function setStatus($status){
        $this->status = $status;
    }
}
