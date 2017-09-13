<form class="form-horizontal form-label-left">
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Bentuk Usaha</label>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<input id="edit-saham-bentuk" type="text" class="form-control" value="{{$pemohon->saham->bentuk}}" disabled>
			<select style="display: none;" id="select-bentuk" name="bentuk" class ="form-control select2">
				<option selected>-Pilih Bentuk Usaha-</option>
				<option value='perseroan terbatas ' >Perseroan Terbatas (PT)</option>
				<option value='perseroan terbatas belum berbadan hukum' >Perseroan Terbatas Belum Berbadan Hukum</option>
				<option value='persekutuan comanditer'>Persekutuan Comanditer</option>
				<option value='firma'>Firma</option>
				<option value='koperasi'>Koperasi</option>
				<option value='perusahaan perorangan'>Perusahaan Perorangan</option>
				<option value='bentuk perusahaan lainnya'>Bentuk Perusahaan Lainnya</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Penanggung Jawab</label>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<input id="edit-saham-penanggung" type="text" class="form-control" value="{{$pemohon->saham->penanggung}}" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Penanggung Jawab</label>
		<div class="col-md-8 col-sm-8 col-xs-12">
			<input id="edit-saham-alamat" type="text" class="form-control" value="{{$pemohon->saham->alamat}}" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemegang Saham 1</label>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-pemegang1" type="text" class="form-control" value="{{$pemohon->saham->saham1}}" disabled>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-jumlah1" type="text" class="form-control" value="{{$pemohon->saham->jumlah1}}" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemegang Saham 2</label>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-pemegang2" type="text" class="form-control" value="{{$pemohon->saham->saham2}}" disabled>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-jumlah2" type="text" class="form-control" value="{{$pemohon->saham->jumlah2}}" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemegang Saham 3</label>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-pemegang3" type="text" class="form-control" value="{{$pemohon->saham->saham3}}" disabled>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-jumlah3" type="text" class="form-control" value="{{$pemohon->saham->jumlah3}}" disabled>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemegang Saham 4</label>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-pemegang4" type="text" class="form-control" value="{{$pemohon->saham->saham4}}" disabled>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-6">
			<input id="edit-saham-jumlah4" type="text" class="form-control" value="{{$pemohon->saham->jumlah4}}" disabled>
			<input id="id_saham" type="hidden" class="form-control"  value="{{$pemohon->saham->id}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
		<div class="col-md-7 col-sm-7 col-xs-12  ">
			<a href="#" id="edit-saham" class="btn btn-sm btn-info">Edit Data</a>
			<a href="#" id="update-saham" class="btn btn-sm btn-info" style="display: none;">Update Data </a>
		</div>
	</div>
</form>
