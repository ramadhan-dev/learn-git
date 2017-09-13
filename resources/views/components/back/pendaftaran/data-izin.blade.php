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

@if($status_persyaratan == '')
<div class="x_panel">
	<div class="x_title">
		<h2><i class="fa fa-bars"></i> Form Data Izin<small>Isi Data Dengan benar</small></h2>
		<ul class="nav navbar-right panel_toolbox">
			<li>
				<a class="collapse-link btn-primary"><i class="fa fa-chevron-up"></i></a>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<div class="" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
				<li role="presentation" class="active" >
					<a style="color:red; font-weight: 700" href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">SIUP</a>
				</li>
				<li role="presentation" class="" style="margin-right: 20px; margin-left: 20px">
					<a style="color:green; font-weight: 700" href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">TDP</a>
				</li>
				<li role="presentation" class="">
					<a style="color:blue; font-weight: 700" href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">HO</a>
				</li>
				<li role="presentation" class="">
					<a style="color:black; font-weight: 700" href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">IMB</a>
				</li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
					<div class="row">
						<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
							@include('components.back.pendaftaran.components.siup')
						</div>
						<div class="col-md-5 col-sm-5 colxs-12">
							@include('components.back.pendaftaran.components.syarat')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
							@include('components.back.pendaftaran.components.tdp')
						</div>
						<div class="col-md-5 col-sm-5 colxs-12">
							@include('components.back.pendaftaran.components.syarat')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
							@include('components.back.pendaftaran.components.ho')
						</div>
						<div class="col-md-5 col-sm-5 colxs-12">
							@include('components.back.pendaftaran.components.syarat')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
							@include('components.back.pendaftaran.components.imb')
						</div>
						<div class="col-md-5 col-sm-5 colxs-12">
							@include('components.back.pendaftaran.components.syarat')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@else
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
			<div class="col-md-7 col-sm-7 colxs-12" style="border-right:1px solid green">
				@include('components.back.pendaftaran.components.detail')
			</div>
			<div class="col-md-5 col-sm-5 colxs-12">
				@include('components.back.pendaftaran.components.syarat')
			</div>
		</div>
	</div>
</div>
@endif

@include('components.back.pendaftaran.assets');


