<div class="row">
	<div class="x_panel">
      <div class="x_title">
        <h2>Data Pemohon</h2>
			<ul class="nav navbar-right panel_toolbox">
				<li>
					<a class="collapse-link btn btn-xs btn-primary" style="color:#00897B;"><i class="fa fa-chevron-up"></i></a>
				</li>
			</ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
		<form role="form" name="frm" class="form-horizontal" method="POST" action="{{route('pemohon.store')}}">
		{{ csrf_field() }}
			<div class="box-body col-md-8 col-md-offset-2">

			<div class="row">
				<div  class="form-group col-md-6 has-feedback{{ $errors->has('pemohon') ? ' has-error' : '' }}">
					<label>Pilih Pemohon</label>
					<select style="width: 100%;" name="pemohon" class ="form-control " id="pemohon">
						<option selected="selected">--Pilih Pemohon--</option>
						<option value="perorangan">Perorangan</option>
						<option value="perusahaan">Perusahaan</option>
						<option value="yayasan">Yayasan</option>
						<option value="bentuk lainnya">Bentuk Lainnya</option>
					</select>
					@if ($errors->has('pemohon'))
						<span class="help-block">
							<strong>{{ $errors->first('pemohon') }}</strong>
						</span>
					@endif
				</div>

				<div class="form-group col-md-6 has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
					<label>Nama Pemohon</label>
					<input type="text" name="nama" class="form-control" placeholder="Input Nama Pemohon" value="{{old('nama')}}">
					<input type="hidden" name="id" class="form-control" placeholder="Input Nama Pemohon" value="{{$id}}">
					@if ($errors->has('nama'))
						<span class="help-block">
							<strong>{{ $errors->first('nama') }}</strong>
						</span>
					@endif
				</div>
			</div>
				

			<div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
					<label>Alamat</label>
					{{ Form::textarea('alamat', null, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
					@if ($errors->has('alamat'))
						<span class="help-block">
							<strong>{{ $errors->first('alamat') }}</strong>
						</span>
					@endif
			</div>

			<div class="row">
				<div id="kota-solsel" class="form-group col-md-4 has-feedback{{ $errors->has('kota') ? ' has-error' : '' }}">
					<label>Kota</label>
					<select style="width: 100%;" name="kota" class ="form-control" id="kota">
						<option value="solsel">Solok Selatan</option>
						<option >Luar Solok Selatan</option>
					</select>
					@if ($errors->has('kota'))
						<span class="help-block">
							<strong>{{ $errors->first('kota') }}</strong>
						</span>
					@endif
				</div>

				<div id="luarkota" style="display: none" class="form-group col-md-4 has-feedback{{ $errors->has('kota') ? ' has-error' : '' }}">
					<label>Kota</label>
					<input id="kotaluar" type="text" name="kota" placeholder="Input Kota" class="form-control">
					@if ($errors->has('kota'))
						<span class="help-block">
							<strong>{{ $errors->first('kota') }}</strong>
						</span>
					@endif
				</div>

				<div id="luarkec" style="display: none" class="form-group col-md-4 has-feedback{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
					<label>Kecamatan</label>
					<input id="kecluar" type="text" name="kecamatan" placeholder="Input Kecamatan" class="form-control">
					@if ($errors->has('kecamatan'))
						<span class="help-block">
							<strong>{{ $errors->first('kecamatan') }}</strong>
						</span>
					@endif
				</div>

				<div id="luardesa" style="display: none" class="form-group col-md-4 has-feedback{{ $errors->has('desa') ? ' has-error' : '' }}">
					<label>Desa</label>
					<input id="desaluar" type="text" name="desa" placeholder="Input Kota" class="form-control">
					@if ($errors->has('desa'))
						<span class="help-block">
							<strong>{{ $errors->first('desa') }}</strong>
						</span>
					@endif
				</div>

				<div id="solselkec" class="form-group col-md-4 has-feedback{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
					<label>Kecamatan</label>
					<select style="width: 100%;" name="kecamatan" class ="form-control select2" id="kecamatan">
						<option selected="selected">-- Pilih Kecamatan--</option>
						@foreach( $kecamatans as $kecamatan)
							<option value="{{$kecamatan->nama}}" id="{{ $kecamatan->id }}">{{$kecamatan->nama}}</option>
						@endforeach
	                </select>
					@if ($errors->has('kecamatan'))
						<span class="help-block">
							<strong>{{ $errors->first('kecamatan') }}</strong>
						</span>
					@endif
				</div>

				<div id="solseldesa" class="form-group col-md-4 has-feedback{{ $errors->has('desa') ? ' has-error' : '' }}">
					<label>Desa</label>
					<select style="width: 100%;" name="desa" class ="form-control select2" id="desa">
						<option selected="selected">-- Pilih Desa--</option>
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


			<div class="row">
				<div  class="form-group col-md-6 has-feedback{{ $errors->has('npwp') ? ' has-error' : '' }}">
					<label>NPWP</label>
					<input type="text" name="npwp" placeholder="Input NPWP" class="form-control" value="{{old('npwp')}}">
					@if ($errors->has('npwp'))
						<span class="help-block">
							<strong>{{ $errors->first('npwp') }}</strong>
						</span>
					@endif
				</div>

				<div  class="form-group col-md-6 has-feedback{{ $errors->has('telpon') ? ' has-error' : '' }}">
					<label>Telpon / Faks</label>
					<input type="text" name="telpon" placeholder="Input Telpon" class="form-control" value="{{old('telpon')}}">
					@if ($errors->has('telpon'))
						<span class="help-block">
							<strong>{{ $errors->first('telpon') }}</strong>
						</span>
					@endif
				</div>
			</div>


			<div class="row">
				<div  class="form-group col-md-6 has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
					<label>Email</label>
					<input type="email" name="email" placeholder="Input Email" class="form-control" value="{{old('email')}}">
					@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div  class="form-group col-md-6 has-feedback{{ $errors->has('jabatan') ? ' has-error' : '' }}">
					<label>Jabatan</label>
					<input type="text" name="jabatan" placeholder="Input Jabatan" class="form-control" value="{{old('jabatan')}}">
					@if ($errors->has('jabatan'))
					<span class="help-block">
						<strong>{{ $errors->first('jabatan') }}</strong>
					</span>
					@endif
				</div>

			</div>
				

			<div class="row">
				<div id="bentuk" style="display: none;"  class="form-group col-md-6 has-feedback{{ $errors->has('bentuk') ? ' has-error' : '' }}">
					<label>Bentuk Usaha</label>
					<select style="width: 100%;" name="bentuk" class ="form-control">
						<option selected>-Pilih Bentuk Usaha-</option>
						<option value='perseroan terbatas ' >Perseroan Terbatas (PT)</option>
						<option value='perseroan terbatas belum berbadan hukum' >Perseroan Terbatas Belum Berbadan Hukum</option>
						<option value='persekutuan comanditer'>Persekutuan Comanditer</option>
						<option value='firma'>Firma</option>
						<option value='koperasi'>Koperasi</option>
						<option value='perusahaan perorangan'>Perusahaan Perorangan</option>
						<option value='bentuk perusahaan lainnya'>Bentuk Perusahaan Lainnya</option>
					</select>
					@if ($errors->has('bentuk'))
					<span class="help-block">
						<strong>{{ $errors->first('bentuk') }}</strong>
					</span>
					@endif
				</div>
				<div id="alamat-penanggung" class="form-group col-md-6 has-feedback{{ $errors->has('alamat_penanggung') ? ' has-error' : '' }}">
					<label>Penanggung Jawan</label>
					<input type="text" name="alamat_penanggung" placeholder="Input Penanggung Jawab" class="form-control" value="{{old('alamat_penanggung')}}">
					@if ($errors->has('alamat_penanggung'))
					<span class="help-block">
						<strong>{{ $errors->first('alamat_penanggung') }}</strong>
					</span>
					@endif
				</div>
			</div>

				
				<div id="pemegang" style="display: none;" class="form-group row has-feedback{{ $errors->has('saham') ? ' has-error' : '' }}">
					<label>Pemegang Saham</label><br>
					<div class="col-md-6">
						<label for="">Nama 1</label>
						<input type="text" name="saham1" class="form-control" placeholder="Input Nama Pemegang Saham"> 
						<label for="">Nama 2</label>
						<input type="text" name="saham2" class="form-control" placeholder="Input Nama Pemegang Saham"> 
						<label for="">Nama 3</label>
						<input type="text" name="saham3" class="form-control" placeholder="Input Nama Pemegang Saham"> 
						<label for="">Nama 4</label>
						<input type="text" name="saham4" class="form-control" placeholder="Input Nama Pemegang Saham"> 
					</div>
					<div class="col-md-6">
						<label for="">Jumlah </label>
						<input type="text" name="jumlah1" class="form-control" placeholder="Input % Saham"> 
						<label for="">Jumlah </label>
						<input type="text" name="jumlah2" class="form-control" placeholder="Input % Saham"> 
						<label for="">Jumlah </label>
						<input type="text" name="jumlah3" class="form-control" placeholder="Input % Saham"> 
						<label for="">Jumlah </label>
						<input type="text" name="jumlah4" class="form-control" placeholder="Input % Saham"> 
					</div>
					@if ($errors->has('jabatan'))
						<span class="help-block">
							<strong>{{ $errors->first('saham') }}</strong>
						</span>
					@endif
				</div>

				<div id="penanggung" class="form-group has-feedback{{ $errors->has('penanggung') ? ' has-error' : '' }}">
					<label>Penanggung Jawan</label>
					{{ Form::textarea('penanggung', null, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
					@if ($errors->has('penanggung'))
						<span class="help-block">
							<strong>{{ $errors->first('penanggung') }}</strong>
						</span>
					@endif
				</div>



				<div  class="form-group has-feedback{{ $errors->has('jekel') ? ' has-error' : '' }}">
					<label style="display: block">Jenis Kelamin</label>
	                <label style="margin-left: 100px;" class="text-center">
	                  <input type="radio" name="jekel" class="flat-red" value="laki-laki"><br>
	                  Laki-Laki
	                </label>
	                <label style="margin-left: 300px;" class="text-center">
	                  <input type="radio" name="jekel" class="flat-red" value="perempuan"><br>
	                  Perempuan
	                </label>

					@if ($errors->has('jekel'))
						<span class="help-block">
							<strong>{{ $errors->first('jekel') }}</strong>
						</span>
					@endif
				</div>

				<div class="row">
					<div  class="form-group col-md-6 has-feedback{{ $errors->has('nik') ? ' has-error' : '' }}">
						<label>No.KTP</label>
						<input type="text" name="nik" placeholder="Input KTP" class="form-control" value="{{old('nik')}}">
						@if ($errors->has('nik'))
						<span class="help-block">
							<strong>{{ $errors->first('nik') }}</strong>
						</span>
						@endif
					</div>
					<div  class="form-group col-md-6 has-feedback{{ $errors->has('hp') ? ' has-error' : '' }}">
						<label>Hp/Mobile</label>
						<input type="text" name="hp" placeholder="Input No Hp" class="form-control" value="{{old('hp')}}">
						@if ($errors->has('hp'))
						<span class="help-block">
							<strong>{{ $errors->first('hp') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group text-center" style="margin-top: 20px">
				<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
				</div>

			</div>
		</form>
	</div>
</div>
</div>

@section('style')
  <link href="{{URL::to('css/select/select2.min.css')}}" rel="stylesheet">
@endsection

@section('script')
  <script src="{{URL::to('js/select/select2.full.js')}}"></script>
  <script src="{{URL::to('js/validator/validator.js')}}"></script>
   <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Pilih Kategori Izin",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 20,
        placeholder: "Pilih Persyaratan Izin",
        allowClear: true
      });
    });
  </script>
<script>
 $(document).ready(function(){
    var url = $('meta[name="url"]').attr('content');
	$('#kotaluar').removeAttr('name');
	$('#kecluar').removeAttr('name');
	$('#desaluar').removeAttr('name');
	$('#bentuk').hide();
	$('#pemegang').hide();
	$('#penanggung ').hide();
	$('#alamat-penanggung ').hide();

    $('#kecamatan').change(function(){
        var id = $(this).children(":selected").attr("id");
        $.ajax({
            url: '/back/getdesa/' + id,
            type: 'GET',
            success: function(val) {
                $('#desa').html(val);
            }
        });
    });

	$(function () {
		$('.select2').select2()
	});

	$(function () {
		$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass   : 'iradio_flat-green'
		});
	});

	$('#kota').on('change', function(){
		var nilai = $('#kota').val();
		if (nilai == 'solsel') {
			$('#kota-solsel').removeClass('col-md-6').addClass('col-md-4')
			$('#luarkota').hide();
			$('#luarkec').hide();
			$('#luardesa').hide();
			$('#solselkec').show();
			$('#solseldesa').show();
			$('#kotaluar').removeAttr('name');
			$('#kecluar').removeAttr('name');
			$('#desaluar').removeAttr('name');
		}else{
			$('#kota-solsel').removeClass('col-md-4').addClass('col-md-6')
			$('#luarkota').show().removeClass('col-md-4').addClass('col-md-6');
			$('#luarkec').show().removeClass('col-md-4').addClass('col-md-6');
			$('#luardesa').show().removeClass('col-md-4').addClass('col-md-6');
			$('#solselkec').hide();
			$('#solseldesa').hide();
			$('#kecamatan').removeAttr('name');
			$('#desa').removeAttr('name');
			$('#kota').removeAttr('name');
			$('#kotaluar').prop('name','kota');
			$('#kecluar').prop('name','kecamatan');
			$('#desaluar').prop('name','desa');

		}
	});

	$('#pemohon').on('change', function(){
		var pemohon = $('#pemohon').val();
		if (pemohon == 'perusahaan' || pemohon == 'yayasan' || pemohon == 'bentuk lainnya') {
			$('#bentuk').show();
			$('#pemegang').show();
			$('#penanggung ').show();
			$('#alamat-penanggung ').show();
		}else{
			$('#bentuk').hide();
			$('#pemegang').hide();
			$('#penanggung ').hide();
			$('#alamat-penanggung ').hide();
		}

	});
	
 });
</script>

@endsection