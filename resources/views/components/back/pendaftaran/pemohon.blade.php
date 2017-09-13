<div class="row">
	<div class="col-md-6">
		<div class="x_panel">
			<div class="x_title">
				<h2>Cari Data</small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				{{ Form::open(array('id' => 'search', 'url' => ' ')) }}
				{{ Form::text('query', old('query'), array('class'=>'form-control col-md-10','placeholder' => 'Search for pemohon..')) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>


	<div class="col-md-6">
		<div class="x_panel">
			<div class="x_title">
				<h2>Daftar Baru</small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
			<a href="{{URL::to('back/pemohonbaru/id-pendaftaran',$id)}}"  class="btn btn-primary btn-block btn-flat bg-navy">DAFTAR PEMOHON BARU</a>
			</div>
		</div>
	</div>
</div>
