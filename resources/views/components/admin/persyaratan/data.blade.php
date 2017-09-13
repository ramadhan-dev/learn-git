<div class="x_panel">
	<div class="x_title">
		<h2>Data Persyaratan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="text-center">
    <a href="#" class="btn btn-primary btn-sm" id="tambah"><i class="fa fa-plus" style="margin-right: 10px;"></i>Tambah</a>
	</div>
	<div class="x_content">
		<table id="datatable-fixed-header" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width:5%">No</th>
					<th style="width:30%">Deskripsi</th>
					<th style="width:30%">Keterangan</th>
					<th style="width:10%">status</th>
					<th style="width:15%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $datas as $persyaratan)
				<tr>
					<td>{{ $loop->index +1 }} </td>
					<td>{{ $persyaratan->deskripsi }} </td>
					<td>{{ $persyaratan->keterangan }} </td>
					<td>
						@if($persyaratan->status == 1)
						{!! 'Aktif'  !!}
						@else
						{!! 'Non-Active' !!}
						@endif
					</td>
					<td>
						<button href="#" class="btn btn-info btn-xs editPersyaratan"  value="{{$persyaratan->id}}"><i class="fa fa-edit"></i></button>
						<button href="#" class="btn btn-danger btn-xs deletePersyaratan" value="{{$persyaratan->id}}""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
			<tr>
				<th>No</th>
				<th>Deskripsi</th>
				<th>Keterangan</th>
				<th>status</th>
				<th>Aksi</th>
			</tr>
			</tfoot>
		</table>
	</div>
</div>
