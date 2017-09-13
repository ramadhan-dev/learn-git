<div class="row">
<div>
	<a href="{{route('pemohon.index')}}" class="btn btn-warning btn small" style="margin-left: 10px;"><i class="glyphicon glyphicon-arrow-left" style="padding-right:10px;"></i>Kembali</a>
</div>
<?php if ($data->pemohon == 'perusahaan' || $data->pemohon == 'yayasan' || $data->pemohon == 'bentuk lainnya') {
						$class = "col-md-5";
					}else{
						$class = "col-md-12";
					}
			?>
	<div class="{{$class}}">
		<div class="x_panel">
			<div class="x_title">
				<h2>Data Pemohon</small></h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<article class="media event">
					<table>
						<tr>
							<td id="title">Pemohon &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td> :</td>
							<td>{{$data->pemohon}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->nama}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Alamat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->alamat}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Kota &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>
								@if($data->kota == 'solsel')
								{{'Solok Selatan'}}
								@else
								{{$data->kota}}
								@endif
							</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">kecamatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->kecamatan}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Desa &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->desa}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Npwp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->npwp}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Telepon &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->telnum}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->email}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Jabatan &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->jabatan}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">Jenis Kelamin</td>
							<td>:</td>
							<td>{{$data->jekel}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">NIK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->nik}}</td>
						</tr>
					</table>
				</article>
				<article class="media event">
					<table>
						<tr>
							<td id="title">HP &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
							<td>:</td>
							<td>{{$data->hp}}</td>
						</tr>
					</table>
				</article>
			</div>
		</div>
	</div>

	@if($data->pemohon != 'perorangan')

		<div class="col-md-7">
			<div class="x_panel">
				<div class="x_title">
					<h2>Data Pemohon</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<article class="media event">
						<table>
							<tr>
								<td id="title">Penanggung Jawab </td>
								<td> :</td>
								<td>{{$data->saham->penanggung}} </td>
							</tr>
						</table>
					</article>
					<article class="media event">
						<table>
							<tr>
								<td id="title">Bentuk Usaha &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								<td>:</td>
								<td>{{$data->saham->bentuk}}</td>
							</tr>
						</table>
					</article>
					<article class="media event">
						<table>
							<tr>
								<td id="title">Saham 1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								<td>:</td>
								<td>{{$data->saham->saham1}} </td>
								<td>Total Saham : {{$data->saham->jumlah1}} </td>
							</tr>
						</table>
					</article>
					<article class="media event">
						<table>
							<tr>
								<td id="title">Saham 2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								<td>:</td>
								<td>{{$data->saham->saham2}} </td>
								<td>Total Saham : {{$data->saham->jumlah2}} </td>
							</tr>
						</table>
					</article>
					<article class="media event">
						<table>
							<tr>
								<td id="title">Saham 3  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								<td>:</td>
								<td>{{$data->saham->saham3}} </td>
								<td>Total Saham : {{$data->saham->jumlah3}} </td>
							</tr>
						</table>
					</article>
					<article class="media event">
						<table>
							<tr>
								<td id="title">Saham 4  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
								<td>:</td>
								<td>{{$data->saham->saham4}} </td>
								<td>Total Saham : {{$data->saham->jumlah4}} </td>
							</tr>
						</table>
					</article>
				</div>
			</div>
		</div>
	@endif
</div>

	@section('style')
	<style>
		tr > td{
			padding-left: 20px;
		}
		#title{
			font-weight: 700
		}
	</style>
	@endsection
