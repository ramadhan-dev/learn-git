<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IzinRequest;
use App\Models\Izin;
use App\Models\Kategori;
use App\Models\Pendaftaran;
use App\Models\Cek_dokumen;

use Session;

class IzinController extends Controller
{

    public function index()
    {
        $data = array(
           'izins' => Izin::all(),
           'kategoris' => Kategori::all(),
        );
        return view('layouts.admin.izin.izin', with($data));
    }


    public function create()
    {
        $datas = Kategori::all();
        return view('layouts.admin.izin.tambah',compact('datas'));
    }

    public function store(IzinRequest $request)
    {
        $izin = new Izin;
        $izin->jenis = $request->jenis;
        $izin->kategori_id = $request->kategori;
        $izin->save();

        return response(['message' => 'Data berhasil dientrikan']);
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Izin::find($id);
        return response($data);
    }

    public function update(Request $request, $id)
    {
     $this->validate($request, [
         'kategori' => 'required',
         'jenis' => 'required',
        ]);
        $data = Izin::find($id);
        $data->jenis=$request->jenis;
        $data->kategori_id=$request->kategori;
        $data->save();
        return response(['message' => 'Data berhasil dperbaharui']);
    }

    public function destroy($id)
    {
        $user = Izin::findOrFail($id);
        Cek_dokumen::where('izin_id', $id)->delete();
        $user->delete();
        return response(['message' => 'Data berhasil dihapus']);
    }
}
