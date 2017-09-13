<div class="x_panel">
	<div class="x_title">
		<h2>Form Kecamatan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form
			role="form"
			class="form-horizontal form-label-left"
			novalidate
			method="POST"
			action="{{route('kecamatan.update',$data->id)}}"
			>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
		<div class="item form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Kecamatan <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<input
			type="text"
			value="{{$data->nama}}"
			name="nama"
			required="required"
			class="form-control col-md-7 col-xs-12"
			>
			@if ($errors->has('nama'))
			<span class="help-block">
				<strong>{{ $errors->first('nama') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<div class="ln_solid"></div>
	<div class="form-group">
		<div class="col-md-6 col-md-offset-3">
			<button id="send" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Submit</button>
		</div>
	</div>
</form>
</div>
</div>


@include('components.admin.kecamatan.assets')
