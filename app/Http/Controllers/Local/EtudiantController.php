<?php

namespace App\Http\Controllers\Local;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\User;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EtudiantController extends Controller
{
    //
    public function index(){
        $user = User::OrderBy('id')->paginate(10);
        //$user = User::all()->where('role_id',1);
        return view('Local/etudiant')->with(compact('user'));
      }

      public function create(){
          $role = Role::all();
          return view('Local/e_create')->with(compact('role'));

      }

      public function store(Request $request){
          $user = new User();
          $user->name= $request->name;
          $user->telephone= $request->telephone;
          $user->image_uri= $request->image_uri;
          $user->email = $request->email;
          $user->password = Hash::make($request->password);
          //$user->password = $request->password;
          $user->role_id = $request->role_id;
          //dd($user);
          $user->save();
          return view ('Local/etudiant');

      }

      public function open($id){
          $user = User::find($id);
          $user->actif=1;
          $user->save();
          return redirect()->back();
          //dd($user);
      }

      public function close($id){
          $user = User::find($id);
          $user->actif=0;
          $user->save();
          return redirect()->back();
                    //dd($user);
      }

      public function edit($id){
          $user = User::find($id);
          $role = Role::all();
          return view('Local/e_edit')->with(compact('role','user'));
      }

      public function save(Request $request){
          $user = User::find($request->id);
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = $request->password;
          $user->role_id = $request->role_id;
          $user->save();
          return view('Local/etudiant');
          //dd($user);
      }
}
