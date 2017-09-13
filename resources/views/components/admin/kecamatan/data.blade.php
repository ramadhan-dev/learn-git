<div class="x_panel">
  <div class="x_title">
    <h2>Data Kecamatan</h2>
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
					<th style="width:85%">Nama Kecamatan</th>
					<th style="width:10%">action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($datas as $key=>$data)
				<tr>
					<td>{{$key + 1}}</td>
					<td>{{$data->nama}}</td>
					<td class="text-right">
						<button href="#" class="btn btn-info btn-xs editKecamatan"  value="{{$data->id}}"><i class="fa fa-edit"></i></button>
						<button href="#" class="btn btn-danger btn-xs deleteKecamatan" value="{{$data->id}}""><i class="fa fa-trash"></i></button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
