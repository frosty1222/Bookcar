<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(){
        $data=[
            'title'=>'Admin Home',
        ];
         return view('admin/admin_index',$data); 
    }
    public function mainview()
    {
        $data = [
            'title' => 'Admin Home',
        ];
        return view('layouts/admin', $data);
    }
}