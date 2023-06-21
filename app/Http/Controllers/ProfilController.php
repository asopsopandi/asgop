<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    //
    function show(){
        $profil = Profil::first();
        if ($profil){
            $data =[
            'nis' => $profil->nis,
            'name' => $profil->name,
            'ttl' => $profil->ttl,
            'sekolah' => $profil->sekolah,
            'alamat' => $profil->alamat,
            'jk'=> $profil->jk,
            'foto' => $profil->foto,
            'action' => '/profil/update/'.$profil->nis
            ];
            return view('profil', $data);
        }else{
            $data =[
            'nis' => '',
            'name' => '',
            'ttl' => '',
            'sekolah' => '',
            'alamat' => '',
            'jk'=> '',
            'foto' => '',
            'action' => 'profil/create/'
            ];
            return view('profil', $data);
        }
       
    
    
    
        // $data = [
        //     'nis' => '',
        //     'nama' => '',
        //     'ttl' => '',
        //     'sekolah' => '',
        //     'alamat' => '',
        //     'foto' => ''
        // ];
        // return view('profil',$data);
    }
    
    function create(Request $request){
        Profil::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            'jk'=> $request->jk,
            'foto' => $request->file('foto')->store('foto')
        ]);

        return redirect('profil');
    }
    function edit(){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('profil/update')."/".$data['profil']->nis;
        $data['tombol'] = "Update";

        return view('profil',$data);
    }
    // function update(Request $request){
    //     Profil::where('nis',$request->id)->update([
    //         'nis' => $request->nis,
    //         'name' => $request->name,
    //         'ttl' => $request->ttl,
    //         'sekolah' => $request->sekolah,
    //         'alamat' => $request->alamat
    //     ]);

    //     return redirect('profil');
    // }

    function update(Request $request){
        $data = Profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        Profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'jk' => $request->jk,
            'foto' => $foto
        ]);
        return redirect('profil');
    }
}
