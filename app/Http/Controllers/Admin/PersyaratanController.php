<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersyaratanRequest;
use App\Models\Persyaratan;
use App\Models\Cek_dokumen;
use Session;

class PersyaratanController extends Controller
{

    public function index()
    {
        $datas= Persyaratan::all();
        return view('layouts.admin.persyaratan.persyaratan', compact('datas'));
    }

    public function create()
    {
        return view('layouts.admin.persyaratan.tambah');
    }

    public function requestStore ($request) {
        $data = new Persyaratan;
        $data->deskripsi = $request->deskripsi;
        $data->keterangan = $request->keterangan;
        $data->status = $request->status;
        return $data;
    }

    public function store(Request $request)
    {
         $this->validate($request, [
         'deskripsi' => 'required',
         'keterangan' => 'required',
         'status' => 'required',
        ]);
        $data = $this->requestStore($request);
        $data->save();
        return response(['message'=>'Data berhasil dientrykan']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Persyaratan::find($id);
        return response($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
         'status' => 'required',
         'keterangan' => 'required',
         'deskripsi' => 'required',
        ]);
         $data = Persyaratan::find($id);
         $data->deskripsi = $request->deskripsi;
         $data->keterangan = $request->keterangan;
         $data->status = $request->status;
         $data->save();
         return response(['message' => 'Data berhasil diperbaharui']);
    }
    public function destroy($id)
    {
        $user = Persyaratan::findOrFail($id);
        Cek_dokumen::where('persyaratan_id', $id)->delete();
        $user->delete();

        return response(['message' => 'Data berhasil dihapus']);
    }
}
