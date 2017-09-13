
<div class="modal fade bs-example-modal-lg" id="kecamatan-modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h2 id="title"></h2>
			</div>
			<div class="modal-body">
				<form
					role="form"
					class="form-horizontal form-label-left"
					novalidate
					id="formKecamatan"
{{-- 					method="POST"
					action="{{route('kecamatan.store')}}" --}}
					>
					{{-- {{ csrf_field() }} --}}
					<div class="item form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Kecamatan <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input
							type="text"
							value="{{old('nama')}}"
							name="nama"
							required="required"
							class="form-control col-md-7 col-xs-12"
							id="kecamatanModal"
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

