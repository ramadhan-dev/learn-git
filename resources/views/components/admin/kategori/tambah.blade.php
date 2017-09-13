<div class="x_panel">
	<div class="x_title">
		<h2>Data Kecamatan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form role="form" class="form-horizontal" method="POST" action="{{route('kategori.store')}}">
			{{ csrf_field() }}
			<div class="box-body col-md-8 col-md-offset-2">
				{{-------- FORM KATEGORI --------}}
				<div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Jenis Kategori</label>
					<input
					type="text"
					name="nama"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter nama"
					value="{{old('nama')}}"
					autofocus
					>
					@if ($errors->has('nama'))
					<span class="help-block">
						<strong>{{ $errors->first('nama') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM KATEGORI--------}}
				<div class="form-group text-center">
					<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
			</div>
		</form>
	</div>