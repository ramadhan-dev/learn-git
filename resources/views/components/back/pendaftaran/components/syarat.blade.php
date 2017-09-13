<div class="box-body col-md-12">
	<div class="text-center">
		<h3>Persyaratan</h3>
	</div>
	<div class="clearfix"></div>
	@foreach( $dokuments as $dokumen)
	<tr>
		<div class="checkbox" style="padding-top: 20px;">
			<label>
				<input type="checkbox" class="flat" > {{$dokumen->persyaratan->deskripsi}} ( {{$dokumen->persyaratan->keterangan}} )
			</label>
		</div>

	</tr>
	@endforeach
</div>