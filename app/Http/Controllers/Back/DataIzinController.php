<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataIzin;
use App\Models\Pemohon;
use App\Models\Pendaftaran;
use Session;

class DataIzinController extends Controller
{
    public function siup(Request $request){
    	$this->validate($request, [
			'jenis_izin'        => 'required',
			'status_perusahaan' => 'required',
			'kegiatan_usaha'    => 'required',
			'barang_utama'      => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
        ]);

		$data                 = new DataIzin;
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->izin_id        = $request->jenis_izin;
		$data->status         = $request->status_perusahaan;
		$data->kegiatan       = $request->kegiatan_usaha;
		$data->barang_pokok   = $request->barang_utama;
		$data->lokasi         = $request->lokasi_usaha;
		$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();

		Session::flash('message', 'Izin Baru Berhasil ditambahkan');
        return redirect()->route('izin.masuk');
    }


    public function tdp(Request $request) {
    	$this->validate($request, [
			'lokasi_usaha'  => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);
		$data                 = new DataIzin;
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->lokasi = $request->lokasi_usaha;
    	$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();
    	Session::flash('message', 'Izin Baru Berhasil ditambahkan');
        return redirect()->route('izin.masuk');
    }

    public function ho(Request $request){
    	$this->validate($request, [
			'kegunaan'  => 'required',
			'lokasi_usaha'  => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);
		$data                 = new DataIzin;
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->kegunaan = $request->kegunaan;
		$data->lokasi = $request->lokasi_usaha;
    	$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();
    	Session::flash('message', 'Izin Baru Berhasil ditambahkan');
        return redirect()->route('izin.masuk');
    }

    public function imb(Request $request){
    	$this->validate($request, [
			'kegunaan'  => 'required',
			'lokasi_usaha'  => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);
		$data                 = new DataIzin;
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->kegunaan = $request->kegunaan;
		$data->lokasi = $request->lokasi_usaha;
    	$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();
    	Session::flash('message', 'Izin Baru Berhasil ditambahkan');
        return redirect()->route('izin.masuk');
    }

    public function updateSiup(Request $request, $id){
    	$this->validate($request, [
			'jenis_izin'        => 'required',
			'status_perusahaan' => 'required',
			'kegiatan_usaha'    => 'required',
			'barang_utama'      => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);

		$update = DataIzin::find($id);
		$update->izin_id        = $request->jenis_izin;
		$update->status         = $request->status_perusahaan;
		$update->kegiatan       = $request->kegiatan_usaha;
		$update->barang_pokok   = $request->barang_utama;
		$update->lokasi         = $request->lokasi_usaha;
		$update->kecamatan_id   = $request->kecamatan;
		$update->desa_id        = $request->desa;
		$update->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();


    	return response([
    		'message' => 'Berhasil'
    		]);
    }

    public function updateTdp(Request $request, $id){
    	$this->validate($request, [
			'lokasi_usaha'  => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);
		$data = DataIzin::find($id);
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->lokasi = $request->lokasi_usaha;
    	$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();

		return response([
    		'message' => 'Berhasil'
    		]);
    }

    public function updateHo(Request $request, $id){
    	$this->validate($request, [
			'kegunaan'  => 'required',
			'lokasi_usaha'  => 'required',
			'kecamatan'         => 'required',
			'desa'              => 'required',
			'status_persyaratan'=> 'required',
			'keterangan'        => 'required',
		]);
		$data                 = DataIzin::find($id);
		$data->pendaftaran_id = $request->pendaftaran_id;
		$data->kegunaan = $request->kegunaan;
		$data->lokasi = $request->lokasi_usaha;
    	$data->kecamatan_id   = $request->kecamatan;
		$data->desa_id        = $request->desa;
		$data->save();

		$update = Pendaftaran::find($request->pendaftaran_id);
		$update->status_persyaratan = $request->status_persyaratan;
		$update->keterangan = $request->keterangan;
		$update->save();

		return response([
    		'message' => 'Berhasil'
    		]);
    }

}
