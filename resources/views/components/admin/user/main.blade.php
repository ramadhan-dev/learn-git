<div class="x_panel">
	<div class="x_title">
		<h2><i class="fa fa-bars"></i> Form Data Users</h2>
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
					<a style="color:red; font-weight: 700" href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Pimpinan</a>
				</li>
				<li role="presentation" class="" style="margin-right: 20px; margin-left: 20px">
					<a style="color:green; font-weight: 700" href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Back User</a>
				</li>
				<li role="presentation" class="">
					<a style="color:blue; font-weight: 700" href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">front User</a>
				</li>
				<li role="presentation" class="">
					<a style="color:black; font-weight: 700" href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Administrator</a>
				</li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
					<div class="row">
						<div class="col-md-12 col-sm-12 colxs-12" style="border-right:1px solid green">
			                @include('components.admin.user.data.pimpinan')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-12 col-sm-12 colxs-12" style="border-right:1px solid green">
			                @include('components.admin.user.data.back')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-12 col-sm-12 colxs-12" style="border-right:1px solid green">
			                @include('components.admin.user.data.front')
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
					<div class="row">
						<div class="col-md-12 col-sm-12 colxs-12" style="border-right:1px solid green">
			                @include('components.admin.user.data.admin')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>