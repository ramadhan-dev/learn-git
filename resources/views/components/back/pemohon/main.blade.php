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
						<th style="width:15%">Nama</th>
						<th style="width:15%">Kota</th>
						<th style="width:15%">Kecamatan</th>
						<th style="width:15%">Desa</th>
						<th style="width:10%">NPWP</th>
						<th style="width:10%">Telnum</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach( $datas as $pemohon)
					<tr>
						<td>{{ $loop->index +1 }} </td>
						<td>{{ $pemohon->pemohon }} </td>
						<td>{{ $pemohon->nama }} </td>
						<td>
							@if($pemohon->kota == 'solsel')
								{{'Solok Selatan'}}
							@else
								{{$pemohon->kota}}
							@endif
						</td>
						<td>{{ $pemohon->kecamatan }} </td>
						<td>{{ $pemohon->desa }} </td>
						<td>{{ $pemohon->npwp }} </td>
						<td>{{ $pemohon->telnum }} </td>
						<th>
							<a href="{{'pemohon-show/'.$pemohon->id}}" class="btn btn-info btn-xs">Detail</a>
						</th>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
				<tr>
					<th >No</th>
					<th >Pemohon</th>
					<th >Nama</th>
					<th >Kota</th>
					<th >Kecamatan</th>
					<th >Desa</th>
					<th >NPWP</th>
					<th >Telnum</th>
					<th>Aksi</th>
				</tr>
				</tfoot>
			</table>
		</div>
	</div>

@include('components.back.pemohon.assets')