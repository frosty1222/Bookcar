<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\AutoModel;
class ProductController extends BaseController
{
    public $userModel;
    public function __construct()
    {
        helper("form");
        $this->userModel = new ProductModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Product Home',
        ];
        $search = $this->request->getGet('search');
        if($search){
            $data['product'] = $this->userModel->like('name',$search)->paginate(6, 'product');
        }else{
            $data['product'] =$this->userModel->paginate(6,'product'); 
        }
        $data['pager'] = $this->userModel->pager;
        // echo '</pre>';
        // print_r($data);
        return view('admin/product',$data);
    }
    public function add_product()
    {
        $category = new AutoModel();
        $data = [
            'title' => 'Add Product Home',
        ];
        $data['category'] = $category->findAll();
        return view('admin/add_product', $data);
    }
    public function edit_product($id){
        $data=[
            'title' => 'Edit Home',
        ];
        $product = new ProductModel();
        $data['product'] = $product->find($id);
        // echo '</pre>';
        // print_r($data);
        // die();
        return view('admin/product_edit',$data);
    }
    public function store(){
        $product = new ProductModel();
        if ($imagefile = $this->request->getFile('image')) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('upload', $newName);
            }
        }
        $data=[
            'name'=>$this->request->getpost('name'),
            'image' => $imagefile->getName(),
            'price'=>$this->request->getpost('price'),
            'sale_price'=>$this->request->getpost('sale_price'),
            'description'=>$this->request->getpost('description'),
            'category_id'=>$this->request->getpost('category_id'),
        ];
        $product->save($data);
        //echo '</pre>';
        //print_r($imagefile->getName());
        // die();
        return redirect()->to(base_url('add_product'))->with('status', 'category add successfully');
    }
    public function update($id){
        $product = new ProductModel();
        if ($imagefile = $this->request->getFile('image')) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('upload', $newName);
            }
        }
        $data = [
            'name' => $this->request->getpost('name'),
            'image' => $newName,
            'price' => $this->request->getpost('price'),
            'sale_price' => $this->request->getpost('sale_price'),
            'description' => $this->request->getpost('description'),
            'category_id' => $this->request->getpost('category_id'),
        ];
        // echo '</pre>';
        // print_r($imagefile->getName());
        // die();
        $product->update($id,$data);
        return redirect()->to(base_url('product_index'))->with('status', 'product update successfully');
    }
    public function delete($id) {
        $product = new ProductModel();
        $product->delete($id);
        return redirect()->to(base_url('product_index'))->with('status', 'product delete successfully');
    }
}
