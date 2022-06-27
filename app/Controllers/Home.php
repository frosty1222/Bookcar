<?php

namespace App\Controllers;
use App\Models\GetNotice;
class Home extends BaseController
{
    public $Notice;
    public function __construct(){
     $this->Notice = new GetNotice();
    }
    public function index()
    {
        $data=[];
        return view('welcome');
    }
    public function store(){
        $notice = new GetNotice();
        $data = [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'phone'=>$this->request->getPost('phone'),
        ];
        $notice->save($data);
        return redirect()->to('welcome')->with('status','Send Successfully');
    }
}
