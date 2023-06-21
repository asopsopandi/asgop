<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portopolio;

class PortopolioController extends Controller
{
    //
    function show(){
        $data['portopolio'] = Portopolio::all();
        $data['cari'] = "";
        return view('portopolio',$data);
   }

   function add(){
       $data =[
           'action'=> url('portopolio/create'),
           'tombol'=> 'simpan',
           'portopolio'=> (object)[
               'nama_portopolio' => '',
               'kategori' => '',
               'deskripsi' => '',
               'foto' => ''
           ]
           ];

           return view('form_portopolio',$data);
   }

   function create(Request $request){
       $validate= $this->validate($request,[
        //    Portopolio::create([

               'nama_portopolio' => 'required|string',
               'kategori' => 'required|string|max:20',
               'deskripsi' => 'required|string',
               'foto' => 'required|mimes:jpg,png'
           ]);
    //    ]);

       $namafile = $request->kategori.".".$request->file('foto')->getClientoriginalExtension();
       $validate['foto'] = $request->file('foto')->storeAs('foto',$namafile);

       Portopolio::create($validate);
       return redirect('portopolio');
   }
   function hapus($id){
       portopolio::where('id',$id)->delete();
       return redirect('portopolio');
   }
   function edit($id){
       $data['portopolio'] = portopolio::find($id);
       $data['action'] = url('portopolio/update').'/'.$data['portopolio']->id;
       $data['tombol'] = "Update";

       return view('form_portopolio',$data);
   }
   function update(Request $request){
       $namafile = $request->kategori.".".$request->file('foto')->getClientOriginalExtension();
       Portopolio::where('id',$request->id)->update([
           'nama_portopolio' => $request->nama_portopolio,
           'kategori' => $request->kategori,
           'deskripsi' => $request->deskripsi,
           'foto' => $request->file('foto')->storeAs('foto', $namafile),
       ]);

       return redirect('portopolio');
   }

   function search(Request $request){
       $data['portopolio'] = Portopolio::where('id,$request->cari')
       ->orWhere('nama_portopolio','like',$request->cari."%")
       ->orWhere('kategori',$request->cari)
       ->paginate();

       $data['cari'] = $request->cari;

       return view('portopolio',$data);
   }
}



// <div class="col-md-3 mb-3">
//         <div class="card h-100" style="width: 16rem;">
//           <div class="badge bg-primary text-white position-absolute">sale</div>
//           <img src="img/01" class="card-img-top" alt="...">
//           <div class="card-body">
//             <h5 class="card-title">[Harga Grosir] Sepatu Sneakers Casual Sport Trend Culture Fashion BEST</h5>
//             <div class="text-warning">
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
//               <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
//             </svg>
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
//               <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
//             </svg>
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
//               <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
//             </svg>
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
//               <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
//             </svg>
//             </div>
//             <span class="text-decoration-line-through">Rp.250.000</span>
//             <p class="card-text">Rp.100.000-200.000</p>
//             <a href="https://api.whatsapp.com/send?phone=082119641561&text=%22hallo%22" class="btn btn-outline-primary">views option</a>
//           </div>
//         </div>
//       </div>
