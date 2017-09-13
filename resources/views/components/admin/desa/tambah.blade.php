<div class="modal fade bs-example-modal-lg" id="desa-modal" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h2 id="title"></h2>
			</div>
			<div class="modal-body">
				<form
					id="formDesa"
					role="form"
					class="form-horizontal form-label-left"
					novalidate
					{{-- method="POST"
					action="{{route('desa.store')}}" --}}
					>
					{{-- {{ csrf_field() }} --}}
					<div class="item form-group has-feedback{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Kecamatan <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 ">
						<select
							style ="width: 100%;"
							name  ="kecamatan"
							class ="form-control"
							id    ="kecamatanDesa"
							>
							<option selected="selected"></option>
							@foreach( $kecamatans as $kecamatan)
							<option value="{{$kecamatan->id}}">{{$kecamatan->nama}}</option>
							@endforeach
						</select>
						@if ($errors->has('kecamatan'))
						<span class="help-block">
							<strong>{{ $errors->first('kecamatan') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<div class="item form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Desa <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input
					type="text"
					value="{{old('nama')}}"
					name="nama"
					required="required"
					class="form-control col-md-7 col-xs-12"
					id="desaModal"
					>
					@if ($errors->has('nama'))
					<span class="help-block">
						<strong>{{ $errors->first('nama') }}</strong>
					</span>
					@endif
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button style="display: none;" id="send" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Submit</button>
		<button style="display: none;"" id="update" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Update</button>
	</div>
</div>
</div>
</div>