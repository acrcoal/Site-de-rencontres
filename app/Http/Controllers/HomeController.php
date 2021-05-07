<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('homes.homepage');
    }

    public function connecter(){
        
        return view('homes.conectevous');
    }

    public function create(){
        
        return view('homes.creercompte');
    }
     
    public function noussommes(){
        
        return view('homes.aproposnous');
    }
    public function conditions(){
        
        return view('homes.confidentialite');
    }   

    public function regle(){
        
        return view('homes.regle');
    }   

    public function contactenous(){
        
        return view('homes.contactenous');
    }
}
