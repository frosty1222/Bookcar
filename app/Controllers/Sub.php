<?php

namespace App\Controllers;
use App\Models\TrailModel;
use App\Models\ProductModel;
class Sub extends  BaseController
{
    public $admin;
    public function __construct(){
      $this->admin = new TrailModel();
    }
    public function index()
    {
        $data=[
            'title'=>'Welcome to trial view'
        ];
        $trail = new TrailModel();
        $data = $this->loadMasterLayout($data,'Trang Chủ','main/driving_trial');
        return view('main/driving_trial',$data);
        
    }
    public function product(){
;        $data = [
            'title'=>'Welcome to product view'
        ];
        $product = new ProductModel();
        $data['result'] = $product->where('category_id',41)->paginate(3,'result');
        $data = $this->loadMasterLayout($data, 'Trang Chủ', 'main/product');
        $data['pager'] =$product->pager;
        return view('main/product',$data);
    }
    public function news(){
        $data = [
            'title' => 'Welcome to News view'
        ];
        $data = $this->loadMasterLayout($data, 'Trang Chủ', 'main/News');
        return view('main/News', $data);
    }
    public function service()
    {
        $data = [
            'title' => 'Welcome to service view'
        ];
        $data = $this->loadMasterLayout($data, 'Trang Chủ', 'main/service');
        return view('main/service', $data);
    }
    public function product_detail()
    {
        $data = [
            'title' => 'Welcome to product_detail view'
        ];
        $data = $this->loadMasterLayout($data, 'Trang Chủ', 'main/product_detail');
        return view('main/product_detail', $data);
    }
}
