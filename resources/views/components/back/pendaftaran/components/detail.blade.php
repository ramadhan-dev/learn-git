@foreach($dataizins as $dataizin)
<form role="form" class="form-horizontal">
	<div class="box-body col-md-12">
		<div class="clearfix"></div>
		@if($dataizin->lokasi == '' && $dataizin->kegunaan =='')
			<div id="data-izin-jenis-siup" class="form-group" >
				<label>Jenis SIUP</label>
				<input type="text" class="form-control" disabled="" id="jenis-izin" value="{{$dataizin->izin->jenis}}">
			</div>
			<div id="data-izin-status-perusahaan" class="row">
				<div class="form-group col-md-6">
					<label for="exampleInputEmail1">Status Perusahaan </label>
					<input type="text" class="form-control" disabled="" id="jenis-izin" value="{{$dataizin->status}}">
				</div>
				<div class="form-group col-md-6">
					<label for="exampleInputEmail1">Kegiatan Usaha</label>
					<input type="text" class="form-control" disabled="" id="jenis-izin" value="{{$dataizin->kegiatan}}">
				</div>
			</div>
			<div id="edit-data-izin-jenis-siup" class="form-group" style="display: none">
	            <label>Jenis SIUP</label>
	            <select
	            	style="width: 100%;"
					name  ="jenis_izin" 
					class="select2_single form-control" tabindex="-1"
					id    ="value-edit-data-izin-jenis-siup"
					>
	              <option selected="selected" value="{{$dataizin->izin_id}}">{{$dataizin->izin->jenis}}</option>
	              @foreach( $izins as $izin)
	              	<option value="{{$izin->id}}">{{$izin->jenis}}</option>
	              @endforeach
	            </select>
	        </div>
	        <div id="edit-data-izin-status-perusahaan" class="row" style="display: none;">
	        	<div class="form-group col-md-6">
					<label for="exampleInputEmail1">Status Perusahaan </label>
					<select
		            	style="width: 100%;"
						name  ="status_perusahaan" 
						class="select2_single form-control" tabindex="-1"
						id    ="value-edit-data-izin-status-perusahaan"
						>
						<option selected="selected" value="{{$dataizin->status}}">{{$dataizin->status}}</option>
						<option value="kantor tunggal">Kantor Tunggal</option>
						<option value="kantor cabang">Kantor Cabang</option>
						<option value="kantor pembantu">Kantor Pembantu</option>
						<option value="kantor perwakilan">Kantor Perwakilan</option>
						<option value="kantor cabnag pembantu">Kantor Cabang Pembantu</option>
						<option value="kantor produksi">Kantor Unit Produksi</option>
						<option value="kantor khas">Kantor Khas</option>
		            </select>
		
				</div>

				<div class="form-group col-md-6">
					<label for="exampleInputEmail1">Kegiatan Usaha</label>
					<select
		            	style="width: 100%;"
						name  ="kegiatan_usaha" 
						class="select2_single form-control" tabindex="-1"
						id    ="value-edit-data-izin-kegiatan-usaha"
						>
						<option selected="selected" value="{{$dataizin->kegiatan}}">{{$dataizin->kegiatan}}</option>
						<option value="perdagangan barang">Perdagangan Barang</option>
						<option value="perdagangan jasa">Perdagangan Jasa</option>
						<option value="perdagangan barang dan jasa">Perdagangan Barang dan Jasa</option>
		            </select>

				</div>
	        </div>
			<div class="form-group">
				<label for="exampleInputEmail1">Barang/Jasa Dagang Utama</label>
				<input type="text" class="form-control" disabled="" id="data-izin-barang-utama" value="{{$dataizin->barang_pokok}}">
			</div>
		@elseif($dataizin->kegunaan !='')
			<div class="row">
				<div  class="form-group col-md-12">
					<label>Kegunaan</label>
					<input type="text" class="form-control" disabled="" id="edit-data-izin-kegunaan" value="{{$dataizin->kegunaan}}">
				</div>
			</div>
			<div class="row">
				<div  class="form-group col-md-12">
					<label>Lokasi</label>
				{{ Form::textarea('lokasi_usaha', $dataizin->lokasi, ['size' => '30x3', 'class' => 'form-control', 'disabled', 'id' => 'lokasiHo']) }}
				</div>
			</div>
		@else
			<div class="row">
				<div  class="form-group col-md-12">
					<label>Lokasi</label>
				{{ Form::textarea('lokasi_usaha', $dataizin->lokasi, ['size' => '30x3', 'class' => 'form-control', 'disabled', 'id' => 'lokasiTdp']) }}
				</div>
			</div>
		@endif

		<div id="data-izin-kecamatan" class="row" >
			<div  class="form-group col-md-6">
				<label>Kecamatan</label>
				<input type="text" class="form-control" disabled="" value="{{$dataizin->desa->kecamatan->nama}}">
			</div>

			<div  class="form-group col-md-6">
				<label>Desa</label>
				<input type="text" class="form-control" disabled="" value="{{$dataizin->desa->nama}}">
			</div>
			
		</div>

		<div id="data-izin-status-persyaratan" class="form-group">
			<label>Status Persyaratan </label>
			<div class="radio">
				<input type="text" class="form-control" disabled=""  value="@if($dataizin->pendaftaran->status_persyaratan)Lengkap @else Kurang @endif">
			</div>
		</div>

		<div id="data-izin-keterangan" class="form-group">
			<label>Keterangan </label>
			<div class="radio">
				<input type="text" class="form-control" disabled=""  value="{{$dataizin->pendaftaran->keterangan}}">
			</div>
		</div>

		<div id="edit-data-izin-kecamatan" class="row" style="display: none;">
			<div  class="form-group col-md-6">
				<label>Kecamatan</label>
				<select name="kecamatan" class ="form-control datakecamatan select2_single" id="value-edit-data-izin-kecamatan">
					<option selected="selected"></option>
					@foreach( $kecamatans as $kecamatan)
						<option value="{{$kecamatan->id}}" id="{{ $kecamatan->id }}">{{$kecamatan->nama}}</option>
					@endforeach
		        </select>
			</div>

			<div  class="form-group col-md-6">
				<label>Desa</label>
				<select name="desa" class ="form-control datadesa select2_single" id="value-edit-data-izin-desa">
					<option selected="selected" ></option>
					@foreach( $desas as $desa)
						<option value="{{$desa->nama}}">{{$desa->nama}}</option>
					@endforeach
	            </select>
			</div>
			
		</div>
		
		<div id="edit-data-izin-status-persyaratan" class="form-group" style="display: none">
			<label>Status Persyaratan </label>
			<div class="radio">
				<label>
					<input type="radio" class="flat " value='1' name="status_persyaratan"> Lengkap
				</label>
				<label>
					<input type="radio" class="flat" value='2' name="status_persyaratan"> Kurang
				</label>
			</div>
		</div>

		<div id="edit-data-izin-keterangan" class="form-group" style="display: none;">
			<label for="exampleInputEmail1">Keterangan</label>
			{{ Form::textarea('keterangan', $dataizin->pendaftaran->keterangan, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
		</div>

		<input type="hidden" name="pendaftaran_id" id="pendaftaran_id" value="{{$dataizin->id}}">
		<input type="hidden" name="pemohon_id" id="pemohon_id" value="{{$dataizin->pendaftaran_id}}">

		<div class="form-group text-center">
			@if($dataizin->lokasi == '' && $dataizin->kegunaan =='')
				<a href="#" id="edit-data-izin-siup" class="btn btn-sm btn-info">Edit Data SIUP</a>
			@elseif($dataizin->kegunaan =='')
				<a href="#" id="edit-data-izin-tdp" class="btn btn-sm btn-info">Edit Data tdp</a>
			@else
				<a href="#" id="edit-data-izin-ho" class="btn btn-sm btn-info">Edit Data</a>
			@endif
			<a href="#" id="update-data-izin-siup" class="btn btn-sm btn-info" style="display: none;">Update Data </a>
			<a href="#" id="update-data-izin-tdp" class="btn btn-sm btn-info" style="display: none;">Update Data </a>
			<a href="#" id="update-data-izin" class="btn btn-sm btn-info" style="display: none;">Update Data </a>
			@foreach (Auth::user()->role as $role) 
				@if ($role->name == 'admin')
					<a target="_blank" href="{{route('print.bukti.pendaftaran', $id)}}" class="btn btn-warning btn-sm ">Print Bukti</a>
					<a href="{{route('kasi.pelayanan.update.status', $id)}}" class="btn btn-info btn-sm ">Lanjut Kasi Izin</a>
					<a href="{{route('kasi.perizinan.update.status', $id)}}" class="btn btn-primary btn-sm ">Lanjut Back Office</a>
                @elseif ($role->name == 'back') 
					<a target="_blank" href="{{route('print.bukti.pendaftaran', $id)}}" class="btn btn-warning btn-sm ">Print</a>
                @elseif ($role->name == 'pelayanan') 
					<a href="{{route('kasi.pelayanan.update.status', $id)}}" class="btn btn-warning btn-sm ">Lanjut</a>
				@elseif ($role->name == 'perizinan') 
					<a href="{{route('kasi.perizinan.update.status', $id)}}" class="btn btn-warning btn-sm ">Lanjut</a>
                @endif
			@endforeach
		</div>
	</div>
</form>
@endforeach