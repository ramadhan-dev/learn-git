<div class="x_panel">
	<div class="x_title">
		<h2>Form Persyarantan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form role="form" class="form-horizontal" method="POST" action="{{route('persyaratan.update',$data->id)}}">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="box-body col-md-offset-2">
				{{-------- FORM DESKRIPSI --------}}
				<div class="form-group col-md-10 has-feedback{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Deskripsi</label>
					<input
					type="text"
					name="deskripsi"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter deskripsi"
					value="{{$data->deskripsi}}"
					autofocus
					>
					@if ($errors->has('deskripsi'))
					<span class="help-block">
						<strong>{{ $errors->first('deskripsi') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM DESKRIPSI--------}}
				{{-------- FORM DESKRIPSI --------}}
				<div class="form-group col-md-10  has-feedback{{ $errors->has('keterangan') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Keterangan</label>
					{{ Form::textarea('keterangan', $data->keterangan, ['size' => '30x3', 'class' => 'form-control']) }}
					@if ($errors->has('keterangan'))
					<span class="help-block">
						<strong>{{ $errors->first('keterangan') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM DESKRIPSI--------}}
				<div class="form-group col-md-3  has-feedback{{ $errors->has('status') ? ' has-error' : '' }}">
				<label>Status :</label>
                    <p>
                      Active:
                      <input type="radio" class="flat" name="status"  value="1"   /> Non-Active:
                      <input type="radio" class="flat" name="status"  value="2" />
                    </p>
                    @if ($errors->has('status'))
				<span class="help-block">
					<strong>{{ $errors->first('status') }}</strong>
				</span>
				@endif
			</div>
				{{-------- END FORM DESKRIPSI--------}}
				<div class="form-group text-center">
					
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
				<a class="btn btn-warning btn-sm" href="{{route('persyaratan.index')}}"> Cancle</a>
				<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
			</div>
		</form>
	</div>
</div>
