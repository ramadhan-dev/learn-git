<div class="x_panel">
  <div class="x_title">
    <h2>Data Jenis Izin</h2>
    <div class="clearfix"></div>
    <div class="text-center">
    <a href="#" class="btn btn-primary btn-sm" id="tambah"><i class="fa fa-plus" style="margin-right: 10px;"></i>Tambah</a>
    </div>
  </div>
  <div class="x_content">
	<table id="datatable-fixed-header" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th style="width:5%">No</th>
				<th style="width:30%">Jenis Izin</th>
				<th style="width:30%">Kategori Izin</th>
				<th style="width:15%">Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $izins as $izin)
			<tr>
				<td>{{ $loop->index +1 }} </td>
				<td>{{ $izin->jenis }} </td>
				<td>{{ $izin->kategori->nama }} </td>
				<td>
					<button href="#" class="btn btn-info btn-xs editIzin"  value="{{$izin->id}}"><i class="fa fa-edit"></i></button>
					<button href="#" class="btn btn-danger btn-xs deleteIzin" value="{{$izin->id}}""><i class="fa fa-trash"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
</div>
