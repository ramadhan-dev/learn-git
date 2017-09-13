<div class="row">
	<?php if ($pemohon->pemohon == 'perusahaan' || $pemohon->pemohon == 'yayasan' || $pemohon->pemohon == 'bentuk lainnya') {
				$class = "col-md-6";
			}else{
				$class = "col-md-12";
			}
	?>
	<div class="{{$class}}">

		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-bars"></i> Data diri Pemohon</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li>
						<a class="collapse-link btn-primary"><i class="fa fa-chevron-down"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content" style="display: none;">
				{{-- ambil data pemohon --}}
				@include('components.back.pendaftaran.components.data-pemohon')
				{{-- end --}}
			</div>
		</div>
	</div>

	@if($pemohon->pemohon != 'perorangan')

		<div class="col-md-6">
			<div class="x_panel">
				<div class="x_title">
				<h2><i class="fa fa-bars"></i> Data Pemegang Saham</h2>
				<ul class="nav navbar-right panel_toolbox">
					<li>
						<a class="collapse-link btn-primary"><i class="fa fa-chevron-down"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
				<div class="x_content" style="display: none;">
				{{-- Data saham --}}
				@include('components.back.pendaftaran.components.data-saham')
				{{-- end --}}
				</div>
			</div>
		</div>
	@endif
</div>
<div class="x_panel">
	<div class="x_title">
		<h2><i class="fa fa-bars"></i> Data Izin dan Persyaratan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li>
				<a class="collapse-link btn-primary"><i class="fa fa-chevron-down"></i></a>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content" style="display: none;">
		<div class="row">
			<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
				@include('components.back.pendaftaran.components.detail')
			</div>
			<div class="col-md-5 col-sm-5 colxs-12">
				@include('components.back.pendaftaran.components.syarat')
			</div>
		</div>
	</div>
</div>

<div class="x_panel">
	<div class="x_title">
		<h2><i class="fa fa-bars"></i> Data Izin dan Persyaratan</h2>
		<ul class="nav navbar-right panel_toolbox">
			<li>
				<a class="collapse-link btn-primary"><i class="fa fa-chevron-up"></i></a>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="row">
			@include('components.front.component.input')
		</div>
	</div>
</div>

@include('components.back.pendaftaran.assets');


