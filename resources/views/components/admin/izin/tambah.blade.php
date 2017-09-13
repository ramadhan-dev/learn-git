<div class="modal fade bs-example-modal-lg" id="izin-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h2 id="title"></h2>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" id="formIzin">
					<div class="box-body col-md-8 col-md-offset-2">
						{{-------- FORM IZIN --------}}
						<div class="form-group has-feedback{{ $errors->has('jenis') ? ' has-error' : '' }}">
							<label for="exampleInputEmail1">Jenis Izin</label>
							<input
							type="text"
							name="jenis"
							class="form-control"
							id="izinModal"
							placeholder="Enter jenis"
							value="{{old('jenis')}}"
							
							>
							@if ($errors->has('jenis'))
							<span class="help-block">
								<strong>{{ $errors->first('jenis') }}</strong>
							</span>
							@endif
						</div>
						{{-------- END FORM IZIN--------}}
						<div class="form-group has-feedback{{ $errors->has('kategori') ? ' has-error' : '' }}">
							<label>Kategori</label>
							<select
								style="width: 100%;"
								name  ="kategori"
								class="form-control"
								id    ="kategoriIzin"
								>
								<option selected="selected"></option>
								@foreach( $kategoris as $kategori)
								<option value="{{$kategori->id}}">{{$kategori->nama}}</option>
								@endforeach
							</select>
							@if ($errors->has('kategori'))
							<span class="help-block">
								<strong>{{ $errors->first('kategori') }}</strong>
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