<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    function show(){
        $data['profil']=Profil::first();
        return view('home',$data);
    }
}
