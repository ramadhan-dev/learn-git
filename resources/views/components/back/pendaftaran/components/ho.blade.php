<form role="form" class="form-horizontal" method="POST" action="{{route('dataIzin.ho')}}">
	{{ csrf_field() }}
	<div class="box-body">
		<div class="text-center">
			<h3>Form Data HO (Izin Gangguan)</h3>
		</div>
		<div class="clearfix"></div>
		<div class="form-group has-feedback{{ $errors->has('kegunaan') ? ' has-error' : '' }}">
			<label for="exampleInputEmail1">Penggunaan</label>
			<input
			type="text"
			name="kegunaan"
			class="form-control"
			>
			@if ($errors->has('kegunaan'))
			<span class="help-block">
				<strong>{{ $errors->first('kegunaan') }}</strong>
			</span>
			@endif
		</div>
		<div class="form-group has-feedback{{ $errors->has('lokasi_usaha') ? ' has-error' : '' }}">
			<label for="exampleInputEmail1">Lokasi Usaha</label>
			{{ Form::textarea('lokasi_usaha', null, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
			@if ($errors->has('lokasi_usaha'))
			<span class="help-block">
				<strong>{{ $errors->first('lokasi_usaha') }}</strong>
			</span>
			@endif
		</div>
		<div class="row">
			<div  class="form-group col-md-6 has-feedback{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
				<label>Kecamatan</label>
				<select style="width: 100%;" name="kecamatan" class ="form-control datakecamatan select2_single" id="kecamatan">
					<option selected="selected"></option>
					@foreach( $kecamatans as $kecamatan)
					<option value="{{$kecamatan->id}}" id="{{ $kecamatan->id }}">{{$kecamatan->nama}}</option>
					@endforeach
				</select>
				@if ($errors->has('kecamatan'))
				<span class="help-block">
					<strong>{{ $errors->first('kecamatan') }}</strong>
				</span>
				@endif
			</div>
			<div  class="form-group col-md-6 has-feedback{{ $errors->has('desa') ? ' has-error' : '' }}">
				<label>Desa</label>
				<select style="width: 100%;" name="desa" class ="form-control datadesa select2_single" id="desa">
					<option selected="selected"></option>
					@foreach( $desas as $desa)
					<option value="{{$desa->nama}}">{{$desa->nama}}</option>
					@endforeach
				</select>
				@if ($errors->has('desa'))
				<span class="help-block">
					<strong>{{ $errors->first('desa') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div  class="form-group has-feedback{{ $errors->has('status_persyaratan') ? ' has-error' : '' }}">
			<label>Status Persyaratan </label>
			<div class="radio">
				<label>
					<input type="radio" class="flat" value='1' name="status_persyaratan"> Lengkap
				</label>
				<label>
					<input type="radio" class="flat" value='2' name="status_persyaratan"> Kurang
				</label>
			</div>
			@if ($errors->has('status_persyaratan'))
				<span class="help-block">
					<strong>{{ $errors->first('status_persyaratan') }}</strong>
				</span>
			@endif
		</div>

		<div class="form-group  has-feedback{{ $errors->has('keterangan') ? ' has-error' : '' }}">
			<label for="exampleInputEmail1">Keterangan</label>
			{{ Form::textarea('keterangan', null, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
			@if ($errors->has('keterangan'))
			<span class="help-block">
				<strong>{{ $errors->first('keterangan') }}</strong>
			</span>
			@endif
		</div>
		<div class="form-group text-center">
			<input type="hidden" name="pendaftaran_id" value="{{$id}}">
			<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
		</div>
	</div>
</form>