<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KecamatanRequest;
use App\Models\Kecamatan;
use App\Models\Desa;
use Session;
use Yajra\Datatables\Datatables;
class KecamatanController extends Controller
{

    public function index()
    {
        $datas = Kecamatan::all();
        return view('layouts.admin.kecamatan.kecamatan', compact('datas'));
    }

    public function create()
    {
        return view('layouts.admin.kecamatan.tambah');
    }

    public function store(KecamatanRequest $request)
    {
        if ($request->ajax()) {
            $kecamatan = new Kecamatan;
            $kecamatan->nama = $request->nama;
            $kecamatan->save();
            return response([
               'message' => 'Data berhasil dientrykan'
            ]);
        }
    }

    public function show($id)
    {
        $data = Kecamatan::find($id);
        return response($data);
    }

    public function edit($id)
    {
        $data = Kecamatan::find($id);
        return response($data);
    }

    public function update(kecamatanRequest $request, $id)
    {
        $data = Kecamatan::find($id);
        $data->nama=$request->nama;
        $data->save();
        return response([
            'message' => 'Data berhasil diperbaharui',
            ]);
    }

    public function destroy($id)
    {
        $user = Kecamatan::findOrFail($id);
        Desa::where('kecamatan_id', $id)->delete();
        $user->delete();
        return response([
            'message' => 'data berhasil dihapus'
            ]);
    }

    // public function getDatatables() {
    //     $datas = Kecamatan::all();
    //     return Datatables::of($datas)
    //     ->addColumn('action', function($data){
    //         return '<button 
    //                     id="editKecamatan" 
    //                     value="'.$data->id.'" 
    //                     class="btn btn-info btn-xs" 
    //                 ><i class="glyphicon glyphicon-pencil"></i></button>';
    //     })
    //     ->make(true);
    // }
    // public function getDatatabless() {
    //     $a =  Datatables::of(Kecamatan::get())->make(true);
    //     dd($a);
    // }
}
