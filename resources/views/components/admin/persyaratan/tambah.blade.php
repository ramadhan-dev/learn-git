<div class="modal fade bs-example-modal-lg" id="persyaratan-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h2 id="title"></h2>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" id="formPersyaratan">
					<div class="box-body col-md-offset-2">
						{{-------- FORM DESKRIPSI --------}}
						<div class="form-group col-md-10 has-feedback{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
							<label for="exampleInputEmail1">Deskripsi</label>
							<input
							type="text"
							name="deskripsi"
							class="form-control"
							placeholder="Enter deskripsi"
							id="description"
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
							{{ Form::textarea('keterangan', null, ['size' => '30x3', 'class' => 'form-control', 'id' => 'keterangan']) }}
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
								<input type="radio" class="flat status" name="status"  value="1"   /> Non-Active:
								<input type="radio" class="flat status" name="status"  value="2" />
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
				</form>
			</div>
			<div class="modal-footer">
				<button style="display: none;" id="send" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Submit</button>
				<button style="display: none;"" id="update" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Update</button>
			</div>
		</div>
	</div>
</div>

