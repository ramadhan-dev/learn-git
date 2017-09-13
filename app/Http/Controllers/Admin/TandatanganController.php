<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TtdRequest;
use App\Models\Ttd;
use Session;

class TandatanganController extends Controller
{

    public function index()
    {
        $datas = Ttd::all();
        return view('admin.tandatangan.tandatangan', compact('datas'));
    }

    public function create()
    {
        return view('admin.tandatangan.tambah');
    }

    public function storeRequest ($request) {
        $data          = new Ttd;
        $data->nama    = $request->nama;
        $data->nip     = $request->nip;
        $data->jabatan = $request->jabatan;
        $data->pangkat = $request->pangkat;
        $data->header  = $request->header;
        $data->title1  = $request->title1;
        $data->title2  = $request->title2;
        $data->berlaku = $request->dari;
        $data->sebagai = $request->sebagai;
        $data->status  = $request->status;
        $data->ttd     = $request->ttd;
        return $data;
    }

    public function storeFoto ($request) {
        return $request;
    }

    public function store(TtdRequest $request)
    {
        $data = $this->storeRequest($request);
        $data->save();
        Session::flash('message', 'Tanda Tangan berhasil di tambahkan');
        return redirect()->route('tandatangan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
