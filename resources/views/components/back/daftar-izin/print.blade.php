<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body{
		color: red;
	}
</style>
</head>
<body onload="window.print()">
	id pendaftaran : {{$data->id}} <br>
	Jenis Izin yang didaftarkan:{{$data->kategori->nama}} <br>
	Nam Pemohon: {{$data->pemohon->pemohon}} <br>
	Nama orang Pemohon: {{$data->pemohon->nama}} <br>
	Statsu PErsyaratan: @if($data->status_persyaratan == 1 ) lengkap @else kurang @endif <br>
	Keterangan PErsyaratan: {{$data->keterangan}} <br>

	<hr>
	Data Izin <br>
	{{$data->dataizin->status}} <br>
	{{$data->dataizin->kegiatan}} <br>  
	{{$data->dataizin->barang_pokok}} <br>
	{{$data->dataizin->kegunaan}} <br>
	{{$data->dataizin->lokasi}} <br>
	{{$data->dataizin->desa->kecamatan->nama}} <br>
	{{$data->dataizin->desa->nama}}  <br>
<hr>
	Data Pemohon <br>

	{{$data->pemohon->nama}} <br>
	{{$data->pemohon->alamat}} <br>
	{{$data->pemohon->kota}} <br>
	{{$data->pemohon->kecamatan}} <br>
	{{$data->pemohon->desa}} <br>
	{{$data->pemohon->npwp}} <br>
	{{$data->pemohon->telnum}} <br>
	{{$data->pemohon->email}} <br>
	{{$data->pemohon->jabatan}} <br>
	{{$data->pemohon->jekel}} <br>
	{{$data->pemohon->nik}} <br>
	{{$data->pemohon->hp}} <br>

<hr>
	Data Saham <hr>
	@if($data->pemohon->pemohon == 'perorangan') orang
	@else
	{{$data->pemohon->saham->bentuk}} <br>
	@endif
</body>
</html>