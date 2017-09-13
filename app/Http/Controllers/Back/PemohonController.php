<?php

namespace App\Http\Controllers\Back;
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


class PemohonController extends Controller
{
    // admmin
    public function index () {
        $datas = Pemohon::all();
        return view('layouts.back.pemohon.main',compact('datas'));
    }

    public function show ($id) {
        $data = Pemohon::find($id);
        return view('layouts.back.pemohon.singel',compact('data'));
    }
// end

    

    public function pemohonbaru ($id) {
    	$data = array(
           'desas' => Desa::all(),
           'kecamatans' => Kecamatan::all(),
           'id' =>  $id,
        );
    	return view('layouts.back.pendaftaran.pemohonbaru', with($data));
    }

    public function getdesa ($kecamatan) {
		$desas = Desa::select('nama','id','kecamatan_id')
                    ->where('kecamatan_id', $kecamatan)
                    ->get();   
        echo "<option value='' id='0/0'>Pilih Desa</option>";
        foreach ($desas as $data) {  
            echo "<option value='$data->nama' id='$data->id'>$data->nama</option>";
        }
    }

    public function ambildesa ($kecamatan) {
        $desas = Desa::select('nama','id','kecamatan_id')
                    ->where('kecamatan_id', $kecamatan)
                    ->get();   
        echo "<option value='' id='0/0'>Pilih Desa</option>";
        foreach ($desas as $data) {  
            echo "<option value='$data->id' id='$data->id'>$data->nama</option>";
        }
    }

    public function pemohonStore($request) {
        $data            = New Pemohon;
        $data->pemohon   = $request->pemohon;
        $data->nama      = $request->nama;
        $data->alamat    = $request->alamat;
        $data->kota      = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->desa      = $request->desa;
        $data->npwp      = $request->npwp;
        $data->telnum    = $request->telpon;
        $data->email     = $request->email;
        $data->jabatan   = $request->jabatan;
        $data->jekel     = $request->jekel;
        $data->nik       = $request->nik;
        $data->hp        = $request->hp;
        return $data;
    }

    public function sahamStore ($request) {
        $data             = new Saham;
        $data->bentuk     = $request->bentuk;
        $data->saham1     = $request->saham1;
        $data->saham2     = $request->saham2;
        $data->saham3     = $request->saham3;
        $data->saham4     = $request->saham4;
        $data->jumlah1    = $request->jumlah1;
        $data->jumlah2    = $request->jumlah2;
        $data->jumlah3    = $request->jumlah3;
        $data->jumlah4    = $request->jumlah4;
        $data->penanggung = $request->penanggung;
        $data->alamat     = $request->alamat_penanggung;
        return $data;
    }

    public function store (PemohonRequest $request) {
        $pemohon = $request->pemohon;
        $id = $request->id;
        if ($pemohon == 'perorangan') {
            $data = $this->pemohonStore($request);
            $data->save();

            $pemohon_id = $data->id;
            $update = Pendaftaran::find($id);
            $update->pemohon_id =  $pemohon_id;
            $update->save();

            Session::flash('message', 'Pemohon berhasil di tambahkan');
            return redirect()->route('data.izin',$id);
        }elseif ($pemohon == 'yayasan' || $pemohon == 'bentuk lainnya' || $pemohon == 'perusahaan') {
            $data = $this->pemohonStore($request);
            $data->save();

            $pemohon_id = $data->id;
            $saham = $this->sahamStore($request);
            $saham->pemohon_id = $pemohon_id;
            $saham->save();

            $update = Pendaftaran::find($id);
            $update->pemohon_id =  $pemohon_id;
            $update->save();

            Session::flash('message', 'Pemohon berhasil di tambahkan');
            return redirect()->route('data.izin',$id);
        }else{
            Session::flash('error', 'silahkan pilih pemohon');
            return redirect()->route('pemohon.baru', $id)->withInput($request->all());
        }
    }

    public function storeTdp(Request $request) {

    }

    public function dataIzin($id){
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
        return view('layouts.back.pendaftaran.data-izin', compact('id', 'izins', 'desas', 'kecamatans', 'pemohon', 'dokuments', 'status_persyaratan','dataizins'));
    }

    public function update(PemohonRequest $request, $id){
        $data            =Pemohon::find($id);
        $data->pemohon   = $request->pemohon;
        $data->nama      = $request->nama;
        $data->alamat    = $request->alamat;
        $data->kota      = $request->kota;
        $data->kecamatan = $request->kecamatan;
        $data->desa      = $request->desa;
        $data->npwp      = $request->npwp;
        $data->telnum    = $request->telpon;
        $data->email     = $request->email;
        $data->jabatan   = $request->jabatan;
        $data->jekel     = $request->jekel;
        $data->nik       = $request->nik;
        $data->hp        = $request->hp;
        $data->save();
        return response(['message' => 'Berhasil' ]);
    }
    public function updateSaham(Request $request, $id){
        $data = Saham::find($id);
        $data->bentuk     = $request->bentuk;
        $data->penanggung = $request->penanggung;
        $data->alamat     = $request->alamat;
        $data->saham1     = $request->saham1;
        $data->saham2     = $request->saham2;
        $data->saham3     = $request->saham3;
        $data->saham4     = $request->saham4;
        $data->jumlah1    = $request->jumlah1;
        $data->jumlah2    = $request->jumlah2;
        $data->jumlah3    = $request->jumlah3;
        $data->jumlah4    = $request->jumlah4;
        $data->save();
        return response(['message' => 'Berhasil' ]);
    }



}
