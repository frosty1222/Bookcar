<?php 
namespace App\Controllers;
use App\Models\TrailModel;
class TrailController extends BaseController{
   public $userModel;
   public function __construct(){
       $this->userModel = new TrailModel();
   }
   public function index(){
      $data = [
         'title'=>'Trail View',
      ];
      $search = $this->request->getGet('search');
      if($search){
         $data['trail'] = $this->userModel->like('full_name',$search)->paginate(6, 'trail');
         $data['pager'] = $this->userModel->like('full_name', $search)->pager;
      }else{
         $data['trail'] = $this->userModel->paginate(6, 'trail');
         $data['pager'] = $this->userModel->pager;
      }
      return view('admin/trail/trial',$data);
   }
   public function store(){
      $trail = new TrailModel();
      if ($imagefile = $this->request->getFile('avatar')) {
         if ($imagefile->isValid() && !$imagefile->hasMoved()) {
            $newName = $imagefile->getName();
            $imagefile->move('uploads',$newName);
         }
      }
      $data = [
         'brand'=>$this->request->getpost('brand'),
         'full_name'=>$this->request->getpost('full_name'),
         'email'=>$this->request->getpost('email'),
         'phone' => $this->request->getpost('phone'),
         'avatar' =>$newName,
      ];
      $trail->save($data);
      // echo '<pre/>';
      // print_r($data);
      // die();
      return redirect()->to('index')->with('status','Add successful');
   }
   public function edit($id)
   {
      $trail = new TrailModel();
      $data = [
         'title'=>'Trail Edit Home',
      ];
      $data['trail'] = $trail->find($id);
      return view('admin/trail/trail_edit',$data);
   }
   public function delete($id)
   {
      $trail = new TrailModel();
      $trail->delete($id);
      return redirect()->to('trail')->with('status','Delete successfully');
   }
   public function update($id)
   {
       $trail = new TrailModel();
      if ($imagefile = $this->request->getFile('avatar')) {
         if ($imagefile->isValid() && !$imagefile->hasMoved()) {
            $newName = $imagefile->getName();
            $imagefile->move('uploads', $newName);
         }
      }
      $data = [
         'brand' => $this->request->getpost('brand'),
         'full_name' => $this->request->getpost('full_name'),
         'email' => $this->request->getpost('email'),
         'phone' => $this->request->getpost('phone'),
         'avatar' => $newName,
      ];
      $trail->update($id,$data);
       return redirect()->to('trail')->with('status','Edit successful');
   }
}