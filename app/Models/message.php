<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'mid';
    
    
    /////////////////////////////////////////////////////////
    public $name;
    public $email;
    public $phone;
    public $message;

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getMessage(){
        return $this->message;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function setMessage($msg){
        $this->message = $msg;
    }
 


}
