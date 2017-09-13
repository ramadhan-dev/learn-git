<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests \CekdokumentRequest;
use App\Models\Cek_dokumen;
use App\Models\Izin;
use App\Models\Kategori;
use App\Models\Persyaratan;
use Session;

class CekdokumentController extends Controller
{

    public function index()
    {
        $datas = Cek_dokumen::all()->sortByDesc('id');
        $kategoris = Kategori::all();
        $syarats = Persyaratan::all();
        return view('layouts.admin.cek_dokumen.document', compact('datas', 'kategoris', 'syarats'));
    }

    // public function create()
    // {
    //     $data = array(
    //        'izins' => Izin::all(),
    //        'syarats' => Persyaratan::all(),
    //     );
    //     return view('layouts.admin.cek_dokumen.tambah', with($data));
    // }

    public function requestStore ($request, $i) {
        $data = new Cek_dokumen;
        $data->kategori_id = $request->kategori;
        $data->status = "status";
        $data->aktif = "aktif";
        $data->persyaratan_id = $request->persyaratan[$i];
        return $data;
    }


    public function store(Request $request)
    {
        $this->validate($request, [
         'kategori' => 'required',
         'persyaratan' => 'required',
        ]);
        $count = count($syarats = $request->persyaratan);
        for ($i=0 ; $i < $count; $i++) { 
            $data = $this->requestStore($request, $i);
            $data->save();
        }
        return response(['message'=> 'Data berhasil dientrykan']);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $user = Cek_dokumen::findOrFail($id);
        $user->delete();
        return response(['message'=> 'Data berhasil dihapus']);
    }
}
