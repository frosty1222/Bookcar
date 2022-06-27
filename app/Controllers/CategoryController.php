<?php

namespace App\Controllers;
use App\Models\AutoModel;
class CategoryController extends BaseController
{
    public $userModel;
    public function __construct(){
        helper("form");
        $this->userModel = new AutoModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Category Home',
        ];
        $search = $this->request->getGet('search');
        if($search){
            $data['category'] = $this->userModel->like('product_name',$search)->paginate(6, 'category');
        }else{
            $data['category'] = $this->userModel->paginate(6, 'category');
        }
        $data['pager'] = $this->userModel->pager;
        // echo '<pre/>';
        // print_r($data1);
        return view('admin/category', $data);
    }
    public function category_add()
    {
        $data = [
            'title' => 'Add Category Home',
        ];
        return view('admin/category_add', $data);
    }
    public function category_store(){
        $category= new AutoModel();

        if ($imagefile = $this->request->getFile('image')) {
                if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                    $newName = $imagefile->getName();
                    $imagefile->move('uploads', $newName);
                }
        }
         $data=[
            'product_name'=>$this->request->getpost('product_name'),
            'status'=>$this->request->getpost('status'),
            'image'=>$imagefile->getName(),
        ];
        $category->save($data);
        // echo '<pre/>';
        // print_r($data);
        // die();
        return redirect()->to(base_url('category_add'))->with('status','category add successfully');
    }
    public function category_edit($id){
        $data = [
            'title' =>'Edit Category',
        ];
        $category= new AutoModel();
        $data['category'] = $category->find($id);
        return view('admin/category_edit', $data);
    }
    public function update($id){
        $category = new AutoModel();
        $data = [
            'product_name' => $this->request->getpost('product_name'),
            'status' => $this->request->getpost('status'),
            'image' =>$this->request->getpost('image'),
        ];
        $category->update($id,$data);
        return redirect()->to(base_url('category'))->with('mess', 'category edit successfully');
    }
    public function category_delete($id){
        $category = new AutoModel();
        $category->delete($id);
        return redirect()->to(base_url('category'))->with('delete', 'category delete successfully');
    }
}
