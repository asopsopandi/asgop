<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('template');
        }
        return redirect()->back();
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
    function search(Request $request){
        $data['user'] = User::where('name',$request->cari)->paginate;
        $data['cari'] = $request->cari;

        return view('user',$data);
    }
}
