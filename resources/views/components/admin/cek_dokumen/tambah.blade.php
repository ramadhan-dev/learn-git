<div class="modal fade bs-example-modal-lg" id="dokumen-modal"  role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
				<h2 id="title"></h2>
			</div>
			<div class="modal-body">
		<form 
			id="formDokument"
			role="form"
			class="form-horizontal form-label-left"
			novalidate>
			{{-- {{ csrf_field() }} --}}
				<div class="form-group has-feedback{{ $errors->has('kategori') ? ' has-error' : '' }}">
					<label>Kategori</label>
					<select
						name  ="kategori"
						class="form-control" tabindex="-1"
						id    ="kategori"
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
				<div class="form-group has-feedback{{ $errors->has('persyaratan') ? ' has-error' : '' }}">
					<label style="display: block">Persyaratan</label>
					@foreach( $syarats as $syarat)
					<label style="padding-left:30px; padding-top: 10px;">
						<input
						type="checkbox"
						name="persyaratan[]"
						value="{{$syarat->id}}"
						class=" form-control flat"
						id="syarat-dokument"
						>
						{{$syarat->deskripsi}}
					</label>
					@endforeach
					
					@if ($errors->has('persyaratan'))
					<span class="help-block">
						<strong>{{ $errors->first('persyaratan') }}</strong>
					</span>
					@endif
				</div>
		</form>
	</div>
	<div class="modal-footer">
		<button id="send" type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus" style="margin-right: 10px;"></i>Submit</button>
	</div>
</div>
