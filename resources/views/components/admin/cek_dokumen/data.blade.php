<div class="x_panel">
      <div class="x_title">
        <h2>Data Desa</h2>
        <div class="clearfix"></div>
      </div>
      <div class="text-center">
			<a href="#" class="btn btn-primary btn-sm" id="tambah-dokumen"><i class="fa fa-plus" style="margin-right: 10px;"></i>Tambah</a>
      </div>
      <div class="x_content">
        <table id="datatable-fixed-header" class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th>No</th>
						<th>Jenis Izin</th>
						<th>Syarat</th>
						<th>Status</th>
						<th>Aktif</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $datas as $document)
					<tr>
						<td>{{ $loop->index +1 }} </td>
						<td>{{ $document->kategori->nama }} </td>
						<td>{{ $document->persyaratan->deskripsi }} </td>
						<td>{{ $document->status }} </td>
						<td>{{ $document->aktif }} </td>
						<td>							
             		 		<button 
	             		 		href="#" 
	             		 		class="btn btn-danger btn-xs deleteDokumen" 
	             		 		value="{{$document->id}}"
             		 		>
             		 			<i class="fa fa-trash"></i>
             		 		</button>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
				<tr>
					<th>No</th>
					<th>Jenis Izin</th>
					<th>Persyaratan</th>
					<th>Status</th>
					<th>Aktif</th>
					<th>Aksi</th>
				</tr>
				</tfoot>
			</table>
		</div>
	</div>
