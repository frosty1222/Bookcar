<?php

namespace App\Controllers;

class Welcome extends \CodeIgniter\Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function test($name){
        echo 'Welcome to '.$name;
    }
    public function address($city,$country){
        echo 'i am from' .$city. 'and' .$country;
    }
    public function _remap($method,$param1=null,$param2=null){
        if(method_exists($this,$method)){
            return $this->$method($param1,$param2);
        }else{
            $this->index();
        }
    }
}
