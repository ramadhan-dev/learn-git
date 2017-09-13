
<form role="form" class="form-horizontal" method="POST" action="{{route('dataIzin.siup')}}">
	{{ csrf_field() }}
	<div class="box-body col-md-12">
	<div class="text-center">
		<h3>Form Data SIUP (Surat Izin Usaha Perdagangan)</h3>
	</div>
		<div class="clearfix"></div>
		
		<div class="form-group has-feedback{{ $errors->has('jenis_izin') ? ' has-error' : '' }}">
            <label>Jenis SIUP</label>
            <select
            	style="width: 100%;"
				name  ="jenis_izin" 
				class="select2_single form-control" tabindex="-1"
				id    ="exampleInputEmail1"
				>
              <option selected="selected"></option>
              @foreach( $izins as $izin)
              	<option value="{{$izin->id}}">{{$izin->jenis}}</option>
              @endforeach
            </select>
			@if ($errors->has('jenis_izin'))
			<span class="help-block">
				<strong>{{ $errors->first('jenis_izin') }}</strong>
			</span>
			@endif
        </div>

        <div class="row">
        	<div class="form-group col-md-6 has-feedback{{ $errors->has('status_perusahaan') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Status Perusahaan </label>
				<select
	            	style="width: 100%;"
					name  ="status_perusahaan" 
					class="select2_single form-control" tabindex="-1"
					id    ="exampleInputEmail1"
					>
					<option selected="selected"></option>
					<option value="kantor tunggal">Kantor Tunggal</option>
					<option value="kantor cabang">Kantor Cabang</option>
					<option value="kantor pembantu">Kantor Pembantu</option>
					<option value="kantor perwakilan">Kantor Perwakilan</option>
					<option value="kantor cabnag pembantu">Kantor Cabang Pembantu</option>
					<option value="kantor produksi">Kantor Unit Produksi</option>
					<option value="kantor khas">Kantor Khas</option>
	            </select>
				@if ($errors->has('status_perusahaan'))
				<span class="help-block">
					<strong>{{ $errors->first('status_perusahaan') }}</strong>
				</span>
				@endif
			</div>

			<div class="form-group col-md-6 has-feedback{{ $errors->has('kegiatan_usaha') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Kegiatan Usaha</label>
				<select
	            	style="width: 100%;"
					name  ="kegiatan_usaha" 
					class="select2_single form-control" tabindex="-1"
					id    ="exampleInputEmail1"
					>
					<option selected="selected"></option>
					<option value="perdagangan barang">Perdagangan Barang</option>
					<option value="perdagangan jasa">Perdagangan Jasa</option>
					<option value="perdagangan barang dan jasa">Perdagangan Barang dan Jasa</option>
	            </select>
				@if ($errors->has('kegiatan_usaha'))
				<span class="help-block">
					<strong>{{ $errors->first('kegiatan_usaha') }}</strong>
				</span>
				@endif
			</div>
        </div>

		<div class="form-group  has-feedback{{ $errors->has('barang_utama') ? ' has-error' : '' }}">
			<label for="exampleInputEmail1">Barang/Jasa Dagang Utama</label>
				<input
				type="text"
				name="barang_utama"
				class="form-control"
				>
				@if ($errors->has('barang_utama'))
				<span class="help-block">
					<strong>{{ $errors->first('barang_utama') }}</strong>
				</span>
				@endif
		</div>

		<div class="row">
			<div  class="form-group col-md-6 has-feedback{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
				<label>Kecamatan</label>
				<select style="width: 100%;" name="kecamatan" class ="form-control datakecamat datakecamat select2_single" id="kecamatansiup">
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
				<select style="width: 100%;" name="desa" class ="form-control datadesa select2_single" id="desasiup">
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

		<input type="hidden" name="pendaftaran_id" value="{{$id}}">

		<div class="form-group text-center">
			<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
		</div>
	</div>
</form>
