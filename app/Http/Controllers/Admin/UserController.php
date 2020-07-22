<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\User;
use App\Models\Site;
use App\Models\Filiere;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function index(){
      $user = User::OrderBy('id')->paginate(10);

      //$user = User::all()->where('role_id',1);
      return view('Admin/Users/index')->with(compact('user'));
    }

    public function create(){
        $role = Role::all()->where('id',2);
        $site = Site::all();
        $filiere = Filiere::all();
        return view('Admin/Users/create')->with(compact('role','site','filiere'));

    }

    public function store(Request $request){
        $user = new User();
        $user->name= $request->name;
        $user->telephone= $request->telephone;
        //$user->image_uri= $request->image_uri;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //$user->password = $request->password;
        $user->role_id = 2;
        $user->site_id= $request->site_id;
        //$user->filiere_id= $request->filiere_id;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/img')){
                    mkdir(public_path().'/img');
                }
                if(!file_exists(public_path().'/img/users')){
                    mkdir(public_path().'/img/users');
                }

                $name = date('dmYhis').'.'.$ext;
                $path = 'img/users/'. $name;
                $fichier->move(public_path('img/users'),$name);
                $user->image_uri = $path;

            }
        }
        //dd($user);
        $user->save();
        return redirect ('/users');

    }

    public function open($id){
        $user = User::find($id);
        $user->active=1;
        $user->save();
        return redirect('/users');
        //dd($user);
    }

    public function close($id){
        $user = User::find($id);
        $user->active=0;
        $user->save();
        return redirect('/users');
        //dd($user);
    }

    public function edit($id){
        $user = User::find($id);
        $role = Role::all();
        return view('Admin/Users/edit')->with(compact('role','user'));
    }

    public function save(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = 2;
        if($request->image_uri){
            $fichier = $request->image_uri;
            $ext_array= ['png','jpg','jpeg','gif'];
            $ext = $fichier->getClientOriginalExtension();
            //dd($ext);
            if (in_array($ext,$ext_array)){
                //dd('ext ok');
                if(!file_exists(public_path().'/img')){
                    mkdir(public_path().'/img');
                }
                if(!file_exists(public_path().'/img/users')){
                    mkdir(public_path().'/img/users');
                }
                $name = date('dmYhis').'.'.$ext;
                $path = 'img/users/'. $name;
                if($user->image_uri){
                    //dd(file_exists(public_path($filieres->image_uri)));
                    if(file_exists(public_path($user->image_uri))){
                       unlink(public_path($user->image_uri));
                    }
                }


                $fichier->move(public_path('img/users'),$name);
                $user->image_uri = $path;

            }
        }
        $user->save();
        return redirect('/users');
        //dd($user);
    }

}
