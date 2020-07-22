<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Site;
use App\User;

class SiteController extends Controller
{
    //
    public function index(){
        $site = Site::all();
        return view('Site\index')->with(compact('site'));
    }

    public function create(){
        $site = Site::all();
        return view('Site\create')->with(compact('site'));
    }

    public function edit($id){
        $site = Site::find($id);
        $site_ = Site::all();
        return view('Site/edit')->with(compact('site','site_'));
    }

    public function show($id){
        $site=Site::find($id);
        return view('Site/show')->with(compact('site'));
    }

   public function enable($id){
       //echo "vous voulez activer le produit" . $id;
       $site = Site::find($id);
       $site->actif = 1;
       $site->save();
       return redirect()->back();
   }

   public function disable($id){
       $site = Site::find($id);
       $site->actif = 0;
       $site->save();
       return redirect()->back();
   }

   public function save(Request $request){
    //dd($request->prix);
    $site= Site::find($request->id);
    $site->name=$request->name;
    $site->telephone=$request->telephone;
    $site->adresse=$request->adresse;
    $site->e_mail=$request->e_mail;
    $site->description=$request->description;
     if($request->image_url){
        $fichier = $request->image_url;
        $ext_array= ['png','jpg','jpeg','gif'];
        $ext = $fichier->getClientOriginalExtension();
        //dd($ext);
        if (in_array($ext,$ext_array)){
            //dd('ext ok');
            if(!file_exists(public_path().'/img')){
                mkdir(public_path().'/img');
            }
            if(!file_exists(public_path().'/img/sites')){
                mkdir(public_path().'/img/sites');
            }
            $name = date('dmYhis').'.'.$ext;
            $path = 'img/sites/'. $name;
            if($site->image_url){
                //dd(file_exists(public_path($site->image_url)));
                if(file_exists(public_path($site->image_url))){
                   unlink(public_path($site->image_url));
                }
            }


            $fichier->move(public_path('img/sites'),$name);
            $site->image_url = $path;

        }
    }
    $site->save();
    return redirect('/sites');
}

public function store(Request $request){
    //dd($request);
    //dd(public_path());
    $site=new Site();
    $site->name=$request->name;
    $site->telephone=$request->telephone;
    $site->adresse=$request->adresse;
    $site->e_mail=$request->e_mail;
    $site->description=$request->description;
   // $site->site_id = 1; //Auth::user()->filiere_id;
    $site->actif = 1;
    if($request->image_url){
        $fichier = $request->image_url;
        $ext_array= ['png','jpg','jpeg','gif'];
        $ext = $fichier->getClientOriginalExtension();
        //dd($ext);
        if (in_array($ext,$ext_array)){
            //dd('ext ok');
            if(!file_exists(public_path().'/img')){
                mkdir(public_path().'/img');
            }
            if(!file_exists(public_path().'/img/sites')){
                mkdir(public_path().'/img/sites');
            }

            $name = date('dmYhis').'.'.$ext;
            $path = 'img/sites/'. $name;
            $fichier->move(public_path('img/sites'),$name);
            $site->image_url = $path;

        }
    }
    //dd('ext not ok');
    $site->save();
    return redirect('/sites');

}
}
