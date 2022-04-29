<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'sid';

    /////////////////////////////////////////////////////////
    public $image;
    public $social;
    public $about;
    public function getImage(){
        return $this->image;
    }
    public function getSocial(){
        return $this->social;
    }
    public function getAbout(){
        return $this->about;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setSocial($social){
        $this->social = $social;
    }
    public function setAbout($abt){
        $this->about = $abt;
    }
     


}
