<div class="x_panel">
      <div class="x_title">
        <h2>Pilih Jenis Izin</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
	<form role="form" class="form-horizontal" method="POST" novalidate="" action="{{route('pendaftaran.store')}}">
	{{ csrf_field() }}
		<div class="box-body col-md-8 col-md-offset-2">

			<div class="form-group has-feedback{{ $errors->has('izin') ? ' has-error' : '' }}">
                <label>Pilih Izin</label>
                <select
                	style="width: 100%;"
					name  ="izin" 
					class="select2_single form-control" tabindex="-1"
					id    ="exampleInputEmail1"
					>
                  <option selected="selected"></option>
                  @foreach( $datas as $kategri)
                  	<option value="{{$kategri->id}}">{{$kategri->nama}}</option>
                  @endforeach
                </select>
                @if ($errors->has('izin'))
						<span class="help-block">
							<strong>{{ $errors->first('izin') }}</strong>
						</span>
						@endif
              </div>

			<div class="form-group text-center">
			<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
			</div>

		</div>
		<!-- /.box-body -->
		<div class="box-footer text-center">
		</div>
	</form>
</div>
</div>


@include('components.back.pendaftaran.assets')
