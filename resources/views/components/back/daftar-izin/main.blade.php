<div class="x_panel">
      <div class="x_title">
        <h2>Data Pemohon</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-fixed-header" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th style="width:5%">No</th>
						<th style="width:15%">Pemohon</th>
						<th style="width:20%">Nama</th>
						<th style="width:30%">Izin</th>
						<th style="width:15%">Persyaratan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $datas as $data)
					<tr>
						<td>{{ $loop->index +1 }} </td>
						<td>{{ $data->pemohon->pemohon }} </td>
						<td>{{ $data->pemohon->nama }} </td>
						<td>{{ $data->kategori->nama }}</td>
						
							@if($data->status_persyaratan == 1)
								<td style="background: green; color:white">{{$data->keterangan}}</td>
							@else
								<td style="background: orange; color:white">{{$data->keterangan}}</td>
							@endif
						<td>
							<a href="{{route('data.izin', $data->id)}}" class="btn btn-xs btn-info">Cek Data</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@include('components.back.daftar-izin.assets')