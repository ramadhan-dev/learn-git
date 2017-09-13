<div class="x_panel">
	<div class="x_title">
		<h2>Data Kecamatan</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<table id="datatable-fixed-header" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th style="width:5%">No</th>
					<th style="width:70%">Jenis Kategori</th>
					<th style="width:15%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $datas as $kategori)
				<tr>
					<td>{{ $loop->index +1 }} </td>
					<td>{{ $kategori->nama }} </td>
					<td>
						
						<a href="{{'kategori/'.$kategori->id.'/edit'}}" class="btn btn-info btn-xs">Edit</a>
						{!!Form::open(
						array('route' =>  array('kategori.destroy', $kategori->id),
						'method' => 'DELETE',
						'_tokrn' => 'csrf_token()',
						'style' => 'display:inline' )
						)!!}
						<input type="submit" value="Delete" class="btn btn-danger btn-xs">
						{!!Form::close()!!}
					</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
			<tr>
				<th>No</th>
				<th>Jenis Kategori</th>
				<th>Aksi</th>
			</tr>
			</tfoot>
		</table>
	</div>
</div>