<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class indexController extends Controller
{
    public function index ()
    {
        return view('index');
    }
    public function register ()
    {
        return view('login.register');
    }
    public function registerprocess (Request $request)
    {
       $this->validate($request, [
           'name' => 'required',
           'email' => 'required|email|unique:users,email',
           'password' => 'required',
       ]);

       $data = [
           'name' => $request->input('name'),
           'email' => strtolower($request->input('email')),
           'password' => bcrypt($request->input('password')),
       ];
       try {
           User::create($data);

           $this->successmsg('Registration successfully!');
           return redirect()->route('login');

       }catch(Exception $e){
        $this->successmsg($e->getMessage());
           return redirect()->back();

       }

    }
    public function login ()
    {
        return view('login.login');
    }
    public function loginprocess (Request $request)
    {

        $credentials = $request->except(['_token','name']);
        if(auth()->attempt($credentials))
        {
            $this->successmsg('Login successfully!');
            return redirect()->route('index');
        }
        $this->errormsg('Invalide email or password!');
            return redirect()->back();

    }

    public function profile ()
    {

    }

    public function logout () 
    {   
        auth()->logout();
        $this->successmsg('Logout successfully');
            return redirect()->route('index');
    }
}
