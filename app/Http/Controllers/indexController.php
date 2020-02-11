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

           session()->flash('message', 'Registration successfully!');
           session()->flash('type', 'success');
           return redirect()->route('login');

       }catch(Exception $e){

        session()->flash('message', $e->getMessage());
        session()->flash('type', 'danger');
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
           session()->flash('message', 'Login successfully!');
           session()->flash('type', 'success');
            return redirect()->route('index');
        }
           session()->flash('message', 'Invalide email or password');
           session()->flash('type', 'danger');
            return redirect()->back();

    }
}
