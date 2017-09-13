<div class="x_panel">
      <div class="x_title">
        <h2>Data Desa</h2>
        <div class="clearfix"></div>
        <div class="text-center">
          <a href="#" class="btn btn-primary btn-sm" id="tambah-desa"><i class="fa fa-plus" style="margin-right: 10px;"></i>Tambah</a>
        </div>
      </div>
      <div class="x_content">
        <table id="datatable-fixed-header" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th style="width:5%">No</th>
              <th style="width:35%">Nama Kecamatan</th>
              <th style="width:35%">Nama Desa</th>
              <th style="width:15%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $desas as $desa)
            <tr style="text-align: left">
              <td>{{ $loop->index +1 }} </td>
              <td>{{ $desa->kecamatan->nama }} </td>
              <td>{{ $desa->nama }} </td>
              <td class="text-left">
              <button href="#" class="btn btn-info btn-xs editDesa"  value="{{$desa->id}}"><i class="fa fa-edit"></i></button>
              <button href="#" class="btn btn-danger btn-xs deleteDesa" value="{{$desa->id}}""><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

