<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Persyaratan</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="text-center">
			<a href="{{route('tandatangan.create')}}" type="button" class="btn bg-navy btn-flat text-center">Tambah Data</a>
		</div>
		<div class="col-md-12">
			<table class="table table-bordered table-hover example1">
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
					{{-- @foreach( $datas as $tandatangan)
						@if($tandatangan->status == 1)
						{!! $status = 'Aktif'  !!}
						@else
						{!! $status = 'Non Aktif'  !!}
						@endif
					<tr>
						<td>{{ $loop->index +1 }} </td>
						<td>{{ $tandatangan->deskripsi }} </td>
						<td>{{ $tandatangan->keterangan }} </td>
						<td>{{ $status }} </td>
						<td>
							
							<a href="{{'tandatangan/'.$tandatangan->id.'/edit'}}" class="btn bg-maroon btn-flat btn-xs">Edit</a>
							{!!Form::open(
							array('route' =>  array('tandatangan.destroy', $tandatangan->id),
							'method' => 'DELETE',
							'_tokrn' => 'csrf_token()',
							'style' => 'display:inline' )
							)!!}
							<input type="submit" value="Delete" class="btn btn-flat btn-xs bg-navy">
							{!!Form::close()!!}
						</td>
					</tr>
					@endforeach --}}
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
</div>

@section('style')
<link rel="stylesheet" href="{{URL::to('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
<style>
  #menu-user a{
    margin-left: 20px;
    width:150px;
  }
  table a, input[type="submit"] {
    width:70px; 
  }

</style>
@endsection
@section('script')
<script src="{{URL::to('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
$(function () {
$('.example1').DataTable()
$('.example2').DataTable({
'paging'      : true,
'lengthChange': false,
'searching'   : false,
'ordering'    : true,
'info'        : true,
'autoWidth'   : false
})
})
</script>
@endsection