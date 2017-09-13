<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Http\Requests\DesaRequest;
use Session;


class DesaController extends Controller
{
    public function index()
    {
        $data = array(
           'kecamatans' => Kecamatan::all(),
           'desas' => Desa::all(),
        );
        return view('layouts.admin.desa.desa', with($data));
    }

    public function create()
    {
        $datas = Kecamatan::all();
        return view('layouts.admin.desa.tambah',compact('datas'));
        
    }

    public function store(DesaRequest $request)
    {
        $desa = new Desa;
        $desa->nama = $request->nama;
        $desa->kecamatan_id = $request->kecamatan;
        $desa->save();
         
        return response([
            'message' => 'Desa berhasil di entrykan'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $data = Desa::find($id);
         // return response($data);
    }
    public function edit($id)
    {
        $data = Desa::find($id);
        return response($data);
    }

    public function update(Request $request, $id)
    {
        $data = Desa::find($id);
        $data->nama=$request->nama;
        $data->save();

        return response([
            'message' => 'Desa berhasil diperbaharui'
            ]);
    }

    public function destroy($id)
    {
        $user = Desa::findOrFail($id);
        $user->delete();
        // Session::flash('message', 'Desa berhasil di hapus');
        // return redirect()->route('desa.index');
        return response([
            'message' => 'Data berhasil dihapus'
            ]);
    }
}
