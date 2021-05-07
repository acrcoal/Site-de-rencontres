<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){        
        return view('auth.register');
    }

    function save(Request $request){
        
        //validate our request
       $request->validate([
            'pseudo'=>'required',
            'courriel'=>'required|email|unique:admins',
            'motdepasse'=>'required|min:5|max:12'
        ]);

        //Insert data into database
        $admin = new Admin;
        $admin->pseudo = $request->pseudo;
        $admin->courriel = $request->courriel;
        $admin->motdepasse = Hash::make($request->motdepasse);
        //$save = $admin->save();
        $admin->save();

        if($admin){
          return back()->with('success', 'New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    function check(Request $request){        
        //Validate requests
        $request->validate([
            'courriel'=>'required|email',
            'motdepasse'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('courriel','=', $request->courriel)->first();

        if(!$userInfo){
            return back()->with('fail', 'We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->motdepasse, $userInfo->motdepasse)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('membresList');

            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    //Debut modifier profil
    public function edit(Admin $admin){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        return view('membres.edit', compact('admin'), $data);
    }

    public function update(Request $request, Admin $admin){
     
        $images = $request->file('photo')->store('public/users');
        $url = Storage::url($images);
        
        $admin->prenom = $request->prenom;
        $admin->nom = $request->nom;
        $admin->sexe = $request->sexe;
        $admin->naissance = $request->naissance;
        $admin->pays = $request->pays;
        $admin->ville = $request->ville;
        $admin->intention = $request->intention;
        $admin->photo = $url;
        $admin->description = $request->description;

        $admin->save();
        
        return redirect()->route('membres.membrelist', $admin);
    }

    //FIn modifier profil

    //Debut rechercher membre

    public function rechercher(Request $request){

        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        $search = trim($request->get('search'));
        $admins = DB::table('admins')
                ->select('id', 'pseudo', 'naissance', 'intention', 'photo')
                ->where('pseudo', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%')
                ->orderBy('nom','asc')
                ->paginate();
        return view('membres.recherchermembre', compact('admins', 'search'), $data);

    }

    //Fin rechercher membre

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    public function membresList(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.membresList', $data);
    }

    public function profil(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.profil', $data, compact('data'));
    }    
    
    public function showAll(){//Pour montrer toutes les membres
       $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
       $membres = Admin::orderBy('id', 'asc')->paginate(); 
       return view('membres.showMembres', $data, compact('membres'));
    }
    
    public function match(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.match', $data);
    }
    public function bloquer(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.bloquer', $data);
    }  
    public function chat(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('membres.chat', $data);
    }
    
    public function listEvenement(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('evenements.listEvenement', $data);
    }
    public function inscriptionEvenement(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('evenements.inscriptionEvenement', $data);
    }
    public function createEvenement(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('evenements.createEvenement', $data);
    }

    public function createGroupe(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('groupes.creergroupe', $data);
    }    
    public function showGroupes(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('groupes.mesgroupes', $data);
    }

    public function createBlog(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('blogs.creerblog', $data);
    }
    public function showAllBlog(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('blogs.leblog', $data);
    }    
    
}
