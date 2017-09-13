<form class="form-horizontal form-label-left">
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Pemohon</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-pemohon" type="text" class="form-control" value="{{$pemohon->pemohon}}" disabled>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pemohon</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-nama" type="text" class="form-control" disabled="disabled" value="{{$pemohon->nama}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-alamat" type="text" class="form-control" disabled="disabled" value="{{$pemohon->alamat}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Kota</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-kota" type="text" class="form-control" disabled="disabled" value="{{$pemohon->kota}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-kecamatan" type="text" class="form-control" disabled="disabled" value="{{$pemohon->kecamatan}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Desa</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-desa" type="text" class="form-control" disabled="disabled" value="{{$pemohon->desa}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">NPWP</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-npwp" type="text" class="form-control" disabled="disabled" value="{{$pemohon->npwp}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Teleon</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-telnum" type="text" class="form-control" disabled="disabled" value="{{$pemohon->telnum}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-email" type="text" class="form-control" disabled="disabled" value="{{$pemohon->email}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-jabatan" type="text" class="form-control" disabled="disabled" value="{{$pemohon->jabatan}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-jekel" type="text" class="form-control" disabled="disabled" value="{{$pemohon->jekel}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">NIK</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-nik" type="text" class="form-control" disabled="disabled" value="{{$pemohon->nik}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12">HP</label>
		<div class="col-md-7 col-sm-7 col-xs-12">
			<input id="edit-hp" type="text" class="form-control" disabled="disabled" value="{{$pemohon->hp}}">
			<input id="id_pemohon" type="hidden" class="form-control"  value="{{$pemohon->id}}">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
		<div class="col-md-7 col-sm-7 col-xs-12  ">
			<a href="#" id="edit-data" class="btn btn-sm btn-info">Edit Data</a>
			<a href="#" id="update-data" class="btn btn-sm btn-info" style="display: none;">Update Data </a>
		</div>
	</div>
</form>


@section('script')
	<script>
		$(document).ready(function(){
			
			$('#edit-data').on('click', function(){
				$('#update-data').show()
				$('#edit-data').hide()
				$('#edit-nama').removeAttr('disabled')
				$('#edit-alamat').removeAttr('disabled')
				$('#edit-kota').removeAttr('disabled')
				$('#edit-kecamatan').removeAttr('disabled')
				$('#edit-desa').removeAttr('disabled')
				$('#edit-npwp').removeAttr('disabled')
				$('#edit-telnum').removeAttr('disabled')
				$('#edit-email').removeAttr('disabled')
				$('#edit-jabatan').removeAttr('disabled')
				$('#edit-jekel').removeAttr('disabled')
				$('#edit-nik').removeAttr('disabled')
				$('#edit-hp').removeAttr('disabled')
			})

			$('#update-data').on('click', function(){

				var pemohon = $('#edit-pemohon').val();
				var nama = $('#edit-nama').val()
				var alamat= $('#edit-alamat').val()
				var kota =$('#edit-kota').val()
				var kecamatan =$('#edit-kecamatan').val()
				var desa =$('#edit-desa').val()
				var npwp =$('#edit-npwp').val()
				var telnum =$('#edit-telnum').val()
				var email =$('#edit-email').val()
				var jabatan =$('#edit-jabatan').val()
				var jekel =$('#edit-jekel').val()
				var nik =$('#edit-nik').val()
				var hp =$('#edit-hp').val()
				var id =$('#id_pemohon').val()
				$.ajax({
					url: '/back/pemohon/' + id,
					data: {pemohon:pemohon, nama:nama, alamat:alamat, kota:kota, kecamatan:kecamatan, desa:desa, npwp:npwp, telpon:telnum, email:email, jabatan:jabatan, jekel:jekel, nik:nik, hp:hp,} ,
					type: "PUT",
					success: function(response){
						window.location.reload();
			            new PNotify({
			                title: 'Success',
			                text: response.message,
			                type: 'success'
			            });
			          },
			          error: function (data) {
			            var errors = $.parseJSON(data.responseText);
			            $.each(errors, function (key, value) {
			              new PNotify({
			                title: 'Error',
			                text: value,
			                type: 'error'
			              });
			            });
			          }
				});
			})

			$('#edit-saham').on('click', function(){
				$('#update-saham').show()
				$('#edit-saham').hide()
				$('#edit-saham-bentuk').hide();
				$('#select-bentuk').show();
				$('#edit-saham-penanggung').removeAttr('disabled')
				$('#edit-saham-alamat').removeAttr('disabled')
				$('#edit-saham-pemegang1').removeAttr('disabled')
				$('#edit-saham-pemegang2').removeAttr('disabled')
				$('#edit-saham-pemegang3').removeAttr('disabled')
				$('#edit-saham-pemegang4').removeAttr('disabled')
				$('#edit-saham-jumlah1').removeAttr('disabled')
				$('#edit-saham-jumlah2').removeAttr('disabled')
				$('#edit-saham-jumlah3').removeAttr('disabled')
				$('#edit-saham-jumlah4').removeAttr('disabled')
			})

			$('#update-saham').on('click', function(){
				var id = $('#id_saham').val()
				var bentuk =$('#select-bentuk').val()
				var penanggung =$('#edit-saham-penanggung').val()
				var alamat =$('#edit-saham-alamat').val()
				var saham1 =$('#edit-saham-pemegang1').val()
				var saham2 =$('#edit-saham-pemegang2').val()
				var saham3 =$('#edit-saham-pemegang3').val()
				var saham4 =$('#edit-saham-pemegang4').val()
				var jumlah1 =$('#edit-saham-jumlah1').val()
				var jumlah2 =$('#edit-saham-jumlah2').val()
				var jumlah3 =$('#edit-saham-jumlah3').val()
				var jumlah4 =$('#edit-saham-jumlah4').val()
				$.ajax({
					url: '/back/saham-pemohon/' + id,
					data: { bentuk:bentuk, penanggung:penanggung, alamat:alamat, saham1:saham1, saham2:saham2, saham3:saham3, saham4:saham4, jumlah1:jumlah1, jumlah2:jumlah2, jumlah3:jumlah3, jumlah4:jumlah4, },
					type: 'PUT',
					success: function(response){
						window.location.reload();
			            new PNotify({
			                title: 'Success',
			                text: response.message,
			                type: 'success'
			            });
					}

				})
			})

			$('#edit-data-izin-siup').on('click',function(){
				$('#data-izin-keterangan').hide()
				$('#data-izin-kecamatan').hide()
				$('#data-izin-status-perusahaan').hide()
				$('#data-izin-jenis-siup').hide()
				$('#data-izin-status-persyaratan').hide()
				$('#edit-data-izin-keterangan').show()
				$('#edit-data-izin-kecamatan').show()
				$('#edit-data-izin-status-persyaratan').show()
				$('#edit-data-izin-jenis-siup').show()
				$('#edit-data-izin-status-perusahaan').show()
				$('#data-izin-barang-utama').removeAttr('disabled')
				$('#update-data-izin-siup').show()
				$('#edit-data-izin-siup').hide()
			})

			$('#update-data-izin-siup').on('click',function(){
				var jenisSiup        = $('#value-edit-data-izin-jenis-siup').val()
				var statusPerusahaan = $('#value-edit-data-izin-status-perusahaan').val()
				var kegiatanUsaha    = $('#value-edit-data-izin-kegiatan-usaha').val()
				var barangUtama   = $('#data-izin-barang-utama').val()
				var kecamatan   = $('#value-edit-data-izin-kecamatan').val()
				var desa   = $('#value-edit-data-izin-desa').val()
				var statusPersyaratan   = $('input[name=status_persyaratan]:checked').val()
				var keterangan   = $('#keterangan').val()
				var id   = $('#pendaftaran_id').val()
				var pendaftaran_id   = $('#pemohon_id').val()
				$.ajax({
					url: '/back/update-data-izin-siup/' + id,
					data: {jenis_izin:jenisSiup, status_perusahaan:statusPerusahaan, kegiatan_usaha:kegiatanUsaha, barang_utama:barangUtama, kecamatan:kecamatan, desa:desa, status_persyaratan:statusPersyaratan, keterangan:keterangan, pendaftaran_id:pendaftaran_id},
					type: 'PUT',
					success: function(response){
						window.location.reload();
						new PNotify({
			                title: 'Success',
			                text: response.message,
			                type: 'success'
			            });
					},
					error: function(data){
						var errors = $.parseJSON(data.responseText);
			            $.each(errors, function (key, value) {
			              new PNotify({
			                title: 'Error',
			                text: value,
			                type: 'error'
			              });
			            });
					}
				})
			})

			$('#edit-data-izin-tdp').on('click', function(){
				$('#update-data-izin-tdp').show()
				$('#edit-data-izin-tdp').hide()
				$('#edit-data-izin-kecamatan').show()
				$('#edit-data-izin-status-persyaratan').show()
				$('#edit-data-izin-keterangan').show()
				$('#data-izin-kecamatan').hide()
				$('#data-izin-status-persyaratan').hide()
				$('#data-izin-keterangan').hide()
				$('#lokasiTdp').removeAttr('disabled')
			})

			$('#update-data-izin-tdp').on('click', function(){
				var lokasi   = $('#lokasiTdp').val()
				var kecamatan   = $('#value-edit-data-izin-kecamatan').val()
				var desa   = $('#value-edit-data-izin-desa').val()
				var statusPersyaratan   = $('input[name=status_persyaratan]:checked').val()
				var keterangan   = $('#keterangan').val()
				var id   = $('#pendaftaran_id').val()
				console.log(id)
				var pendaftaran_id   = $('#pemohon_id').val()
				$.ajax({
					url: '/back/update-data-izin-tdp/' + id,
					data: {lokasi_usaha:lokasi, kecamatan:kecamatan, desa:desa, status_persyaratan:statusPersyaratan, keterangan:keterangan, pendaftaran_id:pendaftaran_id},
					type: 'PUT',
					success: function(response){
						window.location.reload();
						new PNotify({
			                title: 'Success',
			                text: response.message,
			                type: 'success'
			            });
					},
					error: function(data){
						var errors = $.parseJSON(data.responseText);
			            $.each(errors, function (key, value) {
			              new PNotify({
			                title: 'Error',
			                text: value,
			                type: 'error'
			              });
			            });
					}
				})

			})

			$('#edit-data-izin-ho').on('click', function(){
				$('#update-data-izin').show()
				$('#edit-data-izin-ho').hide()
				$('#edit-data-izin-kecamatan').show()
				$('#edit-data-izin-status-persyaratan').show()
				$('#edit-data-izin-keterangan').show()

				$('#data-izin-kecamatan').hide()
				$('#data-izin-status-persyaratan').hide()
				$('#data-izin-keterangan').hide()
				$('#lokasiHo').removeAttr('disabled')
				$('#edit-data-izin-kegunaan').removeAttr('disabled')
			})

			$('#update-data-izin').on('click', function(){
				var kegunaan   = $('#edit-data-izin-kegunaan').val()
				var lokasi   = $('#lokasiHo').val()
				var kecamatan   = $('#value-edit-data-izin-kecamatan').val()
				var desa   = $('#value-edit-data-izin-desa').val()
				var statusPersyaratan   = $('input[name=status_persyaratan]:checked').val()
				var keterangan   = $('#keterangan').val()
				var id   = $('#pendaftaran_id').val()
				var pendaftaran_id   = $('#pemohon_id').val()

				$.ajax({
					url: '/back/update-data-izin-ho/' + id,
					data: {kegunaan:kegunaan, lokasi_usaha:lokasi, kecamatan:kecamatan, desa:desa, status_persyaratan:statusPersyaratan, keterangan:keterangan, pendaftaran_id:pendaftaran_id},
					type: 'PUT',
					success: function(response){
						window.location.reload();
						new PNotify({
			                title: 'Success',
			                text: response.message,
			                type: 'success'
			            });
					},
					error: function(data){
						var errors = $.parseJSON(data.responseText);
			            $.each(errors, function (key, value) {
			              new PNotify({
			                title: 'Error',
			                text: value,
			                type: 'error'
			              });
			            });
					}
				})

			})


			$('.datakecamatan').change(function(){
		        var id = $(this).children(":selected").attr("id");

		        $.ajax({
		            url: '/ambildesa/' + id,
		            type: 'GET',
		            success: function(val) {
		                $('.datadesa').html(val);
		            }
		        });
		    });


		})
	</script>
@endsection