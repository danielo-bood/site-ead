<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcceuilController extends Controller
{
    //
    public function index(){
        if(Auth::user()->role_id==1)
            {
                return view('Admin/acceuil');
            }
        elseif(Auth::user()->role_id==2 and Auth::user()->actif==1)
            {
                return view('Local/acceuil');
            }
        elseif(Auth::user()->role_id==3 and Auth::user()->actif==1) 
            {
                return view('Etudiant/acceuil');
            }      
        else
            {
                return view('Admin/login');
            }
        
        //return view('Admin/acceuil');
    }
}
