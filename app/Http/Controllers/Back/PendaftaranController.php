<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index(){
        $datas = Pendaftaran::where('status',0)->where('status_persyaratan','>', 0)->get();
        return view('layouts.back.izin.index',compact('datas'));

    }

    public function daftar () {
    	$datas = Kategori::all();
    	return view('layouts.back.pendaftaran.index',compact('datas'));
    }

    public function store(Request $request){
    	$data = new Pendaftaran;
        $data->kategori_id = $request->izin;
    	$data->status = 0;
    	$data->save();
        $id = $data->id;

        return redirect()->route('pilih-pemohon', $id);

    }

    public function pilihPemohon($id){
        return view('layouts.back.pendaftaran.pemohon',compact('id'));
    }


    public function printBukti($id){
        $data = Pendaftaran::find($id);
        $data->status = 1;
        $data->save();
        return view('components.back.daftar-izin.print', compact('data'));
    }

    public function updateStatusPelayanan($id){
        $data = Pendaftaran::find($id);
        $data->status = 2;
        $data->save();
        return redirect()->route('kasi.pelayanan');
    }

    public function updateStatusPerizinan($id){
        $data = Pendaftaran::find($id);
        $data->status = 3;
        $data->save();
        return redirect()->route('kasi.perizinan');
    }
}
