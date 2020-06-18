<?php

namespace estoque\Http\Controllers;

//use Illuminate\Http\Request;
use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use Auth;
use Request;

class LoginController extends Controller{
    public function login(){
        $credenciais = Request::only('email', 'password');

        if(Auth::attempt($credenciais)){
            return "Usuario ".Auth::user()->name." logado com sucesso!";
        }
        return "As credenciais não são validas.";
    }
    public function logout(){
        Auth::logout();
        return view('/home');
    }
}
