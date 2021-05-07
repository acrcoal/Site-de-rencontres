<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupeController extends Controller
{
    public function create(){
        return view('groupes.creergroupe');
    }    
    public function showGroupes(){
        return view('groupes.mesgroupes');
    }
}
