<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MembreController extends Controller
{
    /*public function profil(){
        return view('membres.profil');
    }
    public function modifier(){
        return view('membres.modifier');
    }
    public function showAll(){
        return view('membres.showMembres');
    }
    public function rechercher(){
        return view('membres.recherchermembre');
    }
    public function match(){
        return view('membres.match');
    }
    public function bloquer(){
        return view('membres.bloquer');
    }  
    public function chat(){
        return view('membres.chat');
    }    
    public function membresList(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.membresList', $data);
    }*/
    
}
