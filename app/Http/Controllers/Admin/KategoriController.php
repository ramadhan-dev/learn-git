<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Session;

class KategoriController extends Controller
{
    public function index()
    {
        $datas = Kategori::all();
        return view('layouts.admin.kategori.kategori', compact('datas'));
    }

    public function create()
    {
        return redirect()->route('kategori.index');
    }

    public function store(KategoriRequest $request)
    {
        $izin = new Kategori;
        $izin->nama = $request->nama;
        $izin->save();

        Session::flash('message', 'Kategori berhasil di tambahkan');
        return redirect()->route('kategori.create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('layouts.admin.kategori.edit', compact('data'));
    }


    public function update(KategoriRequest $request, $id)
    {
        $data = Kategori::find($id);
        $data->nama=$request->nama;
        $data->save();

        Session::flash('message', 'Kategori berhasil di tambahkan');
        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        $user = Kategori::findOrFail($id);
        $user->delete();
        Session::flash('message', 'Kategori berhasil di hapus');
        return redirect()->route('kategori.index');
    }
}
