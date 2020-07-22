<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;
use App\User;
//use Illuminate\Support\Facades\Auth;

class FiliereController extends Controller
{
    //
    public function index(){
        $filieres = Filiere::all();
        return view('Filiere\index')->with(compact('filieres'));
    }

    public function fifi(){
        $filieres = Filiere::all();
        return view('Filiere\index_')->with(compact('filieres'));
    }

    public function create(){
        $filieres = Filiere::all();
        return view('Filiere\create')->with(compact('filieres'));
    }

    public function edit($id){
        $filieres = Filiere::find($id);
        $filieres_ = Filiere::all();
        return view('Filiere/edit')->with(compact('filieres','filieres_'));
    }

    public function show($id){
        $filiere=Filiere::find($id);
        return view('Filiere/show')->with(compact('filiere'));
    }

   public function enable($id){
       //echo "vous voulez activer le produit" . $id;
       $filieres = Filiere::find($id);
       $filieres->actif = 1;
       $filieres->save();
       return redirect()->back();
   }

   public function disable($id){
       $filieres = Filiere::find($id);
       $filieres->actif = 0;
       $filieres->save();
       return redirect()->back();
   }

   public function save(Request $request){
    //dd($request->prix);
    $filieres= Filiere::find($request->id);
    $filieres->name=$request->name;
    $filieres->duref=$request->duref;
    $filieres->description=$request->description;
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
            if(!file_exists(public_path().'/img/filieres')){
                mkdir(public_path().'/img/filieres');
            }
            $name = date('dmYhis').'.'.$ext;
            $path = 'img/filieres/'. $name;
            if($filieres->image_uri){
                //dd(file_exists(public_path($filieres->image_uri)));
                if(file_exists(public_path($filieres->image_uri))){
                   unlink(public_path($filieres->image_uri));
                }
            }


            $fichier->move(public_path('img/filieres'),$name);
            $filieres->image_uri = $path;

        }
    }
    $filieres->save();
    return redirect('/filieres');
}

public function store(Request $request){
    //dd($request);
    //dd(public_path());
    $filieres=new Filiere();
    $filieres->name=$request->name;
    $filieres->duref=$request->duref;
    $filieres->abreviation = $request->abreviation;
    $filieres->description=$request->description;
    $filieres->site_id = 1; //Auth::user()->filiere_id;
    $filieres->actif = 1;
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
            if(!file_exists(public_path().'/img/filieres')){
                mkdir(public_path().'/img/filieres');
            }

            $name = date('dmYhis').'.'.$ext;
            $path = 'img/filieres/'. $name;
            $fichier->move(public_path('img/filieres'),$name);
            $filieres->image_uri = $path;

        }
    }
    //dd('ext not ok');
    $filieres->save();
    return redirect('/filieres');

}

}
