
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Tambah Tanda Tangan</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" class="form-horizontal" method="POST" action="{{route('tandatangan.store')}}">
	{{ csrf_field() }}
		<div class="box-body col-md-offset-2">

			{{-------- FORM TANDA TANGAN --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Nama</label>
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
			{{-------- END FORM TANDA TANGAN--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('nip') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">NIP</label>
				<input 
					type="text" 
					name="nip" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter nip"
					value="{{old('nip')}}"
					autofocus
				>
						@if ($errors->has('nip'))
						<span class="help-block">
							<strong>{{ $errors->first('nip') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('jabatan') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Jabatan</label>
				<input 
					type="text" 
					name="jabatan" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter jabatan"
					value="{{old('jabatan')}}"
					autofocus
				>
						@if ($errors->has('jabatan'))
						<span class="help-block">
							<strong>{{ $errors->first('jabatan') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('pangkat') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Pangkat</label>
				<input 
					type="text" 
					name="pangkat" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter pangkat"
					value="{{old('pangkat')}}"
					autofocus
				>
						@if ($errors->has('pangkat'))
						<span class="help-block">
							<strong>{{ $errors->first('pangkat') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('header') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Header</label>
				<input 
					type="text" 
					name="header" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter header"
					value="{{old('header')}}"
					autofocus
				>
				
						@if ($errors->has('header'))
						<span class="help-block">
							<strong>{{ $errors->first('header') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('title1') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Teatle 1</label>
				<input 
					type="text" 
					name="title1" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter title1"
					value="{{old('title1')}}"
					autofocus
				>
						@if ($errors->has('title1'))
						<span class="help-block">
							<strong>{{ $errors->first('title1') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('title2') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Teatle 2</label>
				<input 
					type="text" 
					name="title2" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter title2"
					value="{{old('title2')}}"
					autofocus
				>
						@if ($errors->has('title2'))
						<span class="help-block">
							<strong>{{ $errors->first('title2') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class=" form-group col-md-10 ">
				<div class="form-group col-md-5 has-feedback{{ $errors->has('dari') ? ' has-error' : '' }}">
                <label>Berlaku Dari</label>
                <div class="input-group ">
                  <input 
                  		type="text" 
                  		class="form-control" 
                  		name="dari" 
                  		data-inputmask="'alias': 'dd-mm-yyyy'"
                  		format="'dd-mm-yyyy'"
                  		data-mask
                  		Value="{{old('dari')}}"
                  	>
                </div>
					@if ($errors->has('dari'))
					<span class="help-block">
					<strong>{{ $errors->first('dari') }}</strong>
					</span>
					@endif
              </div>
              <div class="form-group col-md-5 has-feedback{{ $errors->has('sampai') ? ' has-error' : '' }}">
                <label>Sampai</label>

                <div class="input-group">
                  <input 
                  		type="text" 
                  		class="form-control" 
                  		name="sampai" 
                  		data-inputmask="'alias': 'dd-mm-yyyy'"
                  		format="'dd-mm-yyyy'"
                  		data-mask
                  		Value="{{old('sampai')}}"
                  	>
                </div>
                @if ($errors->has('sampai'))
					<span class="help-block">
						<strong>{{ $errors->first('sampai') }}</strong>
					</span>
					@endif
              </div>
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('sebagai') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Sebagai</label>
				<input 
					type="text" 
					name="sebagai" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter sebagai"
					value="{{old('sebagai')}}"
					autofocus
				>
						@if ($errors->has('sebagai'))
						<span class="help-block">
							<strong>{{ $errors->first('sebagai') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('status') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Status</label>
				<input 
					type="text" 
					name="status" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter status"
					value="{{old('status')}}"
					autofocus
				>
						@if ($errors->has('status'))
						<span class="help-block">
							<strong>{{ $errors->first('status') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

			{{-------- FORM NIP --------}}
			<div class="form-group col-md-10 has-feedback{{ $errors->has('ttd') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Tanda Tangan</label>
                  <input type="file" id="exampleInputFile" name="ttd">

                  <p class="help-block">Foto tanda tangan</p>
						@if ($errors->has('ttd'))
						<span class="help-block">
							<strong>{{ $errors->first('ttd') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NIP--------}}

		</div>
		<!-- /.box-body -->
		<div class="box-footer text-center">
		<a class="btn btn-flat bg-orange btn-sm" href="{{route('persyaratan.index')}}"> Cancle</a>
			<input type="submit" name="Submit" value="Submit" class="btn btn-flat bg-navy btn-sm">
		</div>
	</form>
</div>

@section('style')
  <link rel="stylesheet" href="{{URL::to('bower_components/select2/dist/css/select2.min.css') }}">

	<style>
		input[type="submit"], .box-footer a{
			width: 150px;
			font-size:13px;
			font-weight: 700;
		}
	</style>
@endsection

@section('script')
<script src ="{{URL::to('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script src ="{{URL::to('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src ="{{URL::to('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src ="{{URL::to('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script>
	$(function () {
		$('.select2').select2()

    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
		 $('[data-mask]').inputmask()
	});
</script>

@endsection