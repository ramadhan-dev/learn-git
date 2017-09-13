<div class="x_panel">
	<div class="x_title">
		<h2>Data Kecamatan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
	<form role="form" class="form-horizontal" method="POST" action="{{route('kategori.update',$data->id)}}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
		<div class="box-body col-md-8 col-md-offset-2">

			{{-------- FORM IZIN --------}}
			<div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Jenis Kategori</label>
				<input 
					type="text" 
					name="nama" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter nama"
					value="{{$data->nama}}"
					autofocus
				>
						@if ($errors->has('nama'))
						<span class="help-block">
							<strong>{{ $errors->first('nama') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM IZIN--}}

			<div class="ln_solid"></div>

			<div class="form-group text-center">
			<a class="btn btn-warning btn-sm" href="{{route('kategori.index')}}"> Cancle</a>
			<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
			</div>

		</div>
	</form>
</div>
</div>
@section('style')
	<style>
		input[type="submit"], .form-group a{
			width: 150px;
			font-size:13px;
			font-weight: 700;
		}
	</style>
@endsection

@section('script')
@endsection