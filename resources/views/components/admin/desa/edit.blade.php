<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
		<div class="x_title">
			<h2>Form Edit Desa</h2>
			<div class="clearfix"></div>
		</div>
	<div class="x_content">
		<form 
			role="form"
			class="form-horizontal form-label-left"
			novalidate
			method="POST" 
			action="{{route('desa.update',$data->id)}}"
		>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="box-body col-md-8 col-md-offset-2">

				{{-------- FORM KECAMATAN --------}}
				<div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Nama Desa</label>
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
				{{-------- END FORM KECAMATAN--------}}

				<div class="form-group text-center">
				<a class="btn btn-flat bg-orange btn-sm" href="{{route('desa.index')}}"> Cancle</a>
				<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
				</div>

			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
			</div>
		</form>
	</div>
	</div>
</div>
