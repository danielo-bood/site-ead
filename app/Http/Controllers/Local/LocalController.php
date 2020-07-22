<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Etudiant;
use App\Models\Role;
use App\Models\Filiere;
use App\Models\Site;
use App\Models\Local;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LocalController extends Controller
{
    //
    public function index(){
        $user = User::OrderBy('id')->paginate(10);
        $user = User::all()->where('role_id',3);
        return view('Local/etudiant')->with(compact('user'));
      }

      public function create(){
          $role = Role::all()->where('id',3);
          $filiere = Filiere::all();
          $user = User::all();
          $site = Site::all();
          return view('Local/e_create')->with(compact('role','filiere','user','site'));

      }

      public function store(Request $request){
          $user = new Local();
          $user->name= $request->name;
          $user->telephone= $request->telephone;
          $user->email = $request->email;
          $user->filiere_id = $request->filiere_id;
          $user->site_id = $request->site_id;
          $user->password = Hash::make($request->password);
          //$user->password = $request->password;
          $user->role_id = 3;
          $user->actif = 1;
          //dd($user);
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
          $user->save();
          return redirect('/etudiant');

      }

      public function open($id){
          $user = User::find($id);
        //  dd($user);
          $user->actif=1;
          $user->save();
          return back();
          //dd($user);
      }

      public function close($id){
          $user = User::find($id);
          $user->actif=0;
          $user->save();
          return back();
          //dd($user);
      }

      public function edit($id){
          $user = User::find($id);
          $role = User::all()->where('role_id',3);
          return view('Local/e_edit')->with(compact('role','user'));
      }

      public function save(Request $request){
          $user = User::find($request->id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = $request->password;
          $user->role_id = 3;
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
          return view('Local/etudiant');
          //dd($user);
      }
}
