<?php 
namespace App\Controllers;
use App\Models\UserModel;
use App\Libraries\Hash;
class UserController extends BaseController{
    public $userModel;
    
    public function __construct(){
          helper(['url','form']);
          $this->userModel = new UserModel();
    }
    public function index(){
        $request = $this->request;
        $userModel = new UserModel();
        $data = [];
        helper('form');
            $rules = [
            'first_name'=>'required|min_length[1]|max_length[20]',
            'last_name'=> 'required|min_length[3]|max_length[20]',
            'email'=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password'=> 'required|min_length[8]|max_length[12]',
            'cpassword' => 'required|min_length[8]|max_length[12]|matches[password]',
           ];
           if(!$this->validate($rules)){
              $data['validation'] = $this->validator;
           }else{
                if ($imagefile = $this->request->getFile('avatar')) {
                    if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                        $newName = $imagefile->getName();
                        $imagefile->move('uploads', $newName);
                    }
                }
                 $first_name=$request->getpost('first_name');
                 $last_name=$request->getpost('last_name');
                 $address=$request->getpost('address');
                 $phone=$request->getpost('phone');
                 $email =$request->getpost('email');
                 $avatar =$imagefile->getName();
                 $password = $request->getpost('password');
               $data = [
                'first_name' =>$first_name,
                'last_name' =>$last_name,
                'address' => $address,
                'phone' => $phone,
                'email' =>$email,
                'avatar' => $avatar,
                'password' =>$password,
               ];
               $userModel->save($data);
               $last_id = $userModel->insertID();
               session()->set('loggedUsser',$last_id);
               return redirect()->to('welcome');
           }
        return view('register',$data);
    }
    public function login()
    {
        $data = [];
        helper('form'); 
        return view('login', $data);
    }
    public function login2(){
        $data = [];
        helper('form');
        return view('login2', $data);
    }
    function check(){
        $validation = $this->validate([
            'email' =>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors'=>[
                    'required'=>'email is required',
                    'valid_email'=>'Enter a valid email address',
                    'is_not_unique'=>'This email is not registered on our server'
                ]
                ],
                'password'=>[
                    'rules'=>'required|min_length[5]|max_length[12]',
                    'errors'=>[
                        'required'=>'password is required',
                        'min_length'=>'password has not have at least 5 characters in length',
                        'max_length' => 'password must not have more than 12 characters in length',
                    ]
                ]
        ]);
        if(!$validation){
            return view('login',['validation'=>$this->validator]);
        }else{
           $email = $this->request->getPost('email');
           $password = $this->request->getPost('password');
           $userModel = new UserModel();
           $user_info = $userModel->where('email',$email)->first();
           $check_password = $userModel->where('password',$password)->first();
           
           if($check_password){
               $user_id = $user_info['id'];
               session()->set('loggedUser',$user_id);
               return redirect()->to('welcome');
           }else{
               session()->setFlashdata('fail','incorrect password');
               return redirect()->to('login')->withInput();
           }
        }
    }
    function check2()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' => [
                    'required' => 'email is required',
                    'valid_email' => 'Enter a valid email address',
                    'is_not_unique' => 'This email is not registered on our server'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'password is required',
                    'min_length' => 'password has not have at least 5 characters in length',
                    'max_length' => 'password must not have more than 12 characters in length',
                ]
            ],
            'phone' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'phone is required',
                    'min_length' => 'phone number has not have at least 5 characters in length',
                    'max_length' => 'phone number must not have more than 12 characters in length',
                ]
            ]
        ]);
        if (!$validation) {
            return view('login2', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $phone = $this->request->getPost('phone');
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = $userModel->where('password', $password)->first();
            $check_phone = $userModel->where('phone', $phone)->first();
            if ($check_password && $check_phone) {
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('mainview');
            } else {
                session()->setFlashdata('fail', 'incorrect incoming fields');
                return redirect()->to('login2')->withInput();
            }
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}