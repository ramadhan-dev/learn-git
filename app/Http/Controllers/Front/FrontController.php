<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\pemohon;
use App\Models\Pendaftaran;
use App\Models\Cek_dokumen;
use App\Models\Saham;
use App\Models\Izin;
use App\Models\DataIzin;
use App\Http\Requests\PemohonRequest;

use Illuminate\Http\Request;
use Session;
use DB;

class FrontController extends Controller
{
	public function __construct()
    {
        // $this->middleware('front');
    }
    public function index () {
    	$datas = Pendaftaran::where('status',3)->get();
    	return view('layouts.front.dashboard',compact('datas'));
    }

    public function show($id){
    	$kategori_id = Pendaftaran::where('id' , $id)->get();
            foreach ($kategori_id as $value) {
                $kategori_id = $value->kategori_id;
                $pemohon_id = $value->pemohon_id;
                $status_persyaratan = $value->status_persyaratan;
            }
           $izins      = Izin::where('kategori_id' , $kategori_id)->get();
           $dataizins   = DataIzin::where('pendaftaran_id' , $id)->get();
           $dokuments  = Cek_dokumen::where('kategori_id' , $kategori_id)->get();
           $pemohon    = Pemohon::find($pemohon_id);
           $desas      = Desa::all();
           $kecamatans = Kecamatan::all();
        return view('layouts.front.pendaftaran.data-izin', compact('id', 'izins', 'desas', 'kecamatans', 'pemohon', 'dokuments', 'status_persyaratan','dataizins'));
    }
}
