<?php

namespace App\Controllers\Mdashboard;

use App\Controllers\BaseController;
use App\Models\User;
class Auth extends BaseController
{
    public function register()
    {
        if ($this->request->is('get')) {
            return view('mdashboard/register');
        } 
        else if ($this->request->is('post')) {
            $rules = [
                'username' => 'required|min_length[3]',
                'email' => 'required|valid_email',
                'password' => 'required|min_length[5]|max_length[10]',
                'cpassword'=> 'matches[password]'
            ];
            
            if($this->validate($rules)){
                $formModel = new User();
                $data = [
                    'username' => $this->request->getVar('username'),
                    'email'  => $this->request->getVar('email'),
                    'password'  => $this->request->getVar('password'),
                ];
                $formModel->insert($data);
                // return redirect()->to('/register');
                $session= session();
                $session->set("success_message","User registered successfully");
                $session->markAsFlashdata('success_message');
                return view('mdashboard/register');
            }else{
                return view('mdashboard/register'); 
                // $data['validation'] = $this->validator;
                // echo view('register', $data);
            }  
        }
    }
    public function login(){
        if ($this->request->is('get')) {
            return view('mdashboard/login');
        } 
        else if($this->request->is('post')) {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',
            ];
            if($this->validate($rules)){
                $model = new User();
                $record = $model->where('email',$this->request->getVar('email'))
                            ->where('password',$this->request->getVar('password'))
                            ->first();
                $session = session();
                if(!is_null($record)){
                    //data found at database
                    $sess_data = [
                        'user_id'=>$record['id'],
                        'username'=>$record['username'],
                        'email'=>$record['email'],
                        // 'user_type'=>$record['user_type'],
                        'loginned'=>'loginned'
                    ];
                    $session->set($sess_data);
                    return redirect()->to('mdashboard/home');
                } else {
                    $session->set('failed_message',"Record does not match, try again");
                    $session->markAsFlashdata('failed_message');
                    return view('mdashboard/login');
                }
            } else {
                // return redirect()->to('login');
                return view('mdashboard/login');
            } 
        }
    }
}
