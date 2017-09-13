<div class="col-md-12">
  <!-- Application buttons -->
  <div class="box box-info">
    <div class="box-body">
      <a href="{{route('user.index')}} " class="btn btn-app">
        <span class="badge bg-red">{{$users}}</span>
        <i class="fa fa-users"></i> Users
      </a>
      <a href="{{route('user.index')}} " class="btn btn-app">
        <span class="badge bg-blue">{{$users}}</span>
        <i class="fa fa-user-plus"></i> Pemohon
      </a>
      <a href="{{route('user.index')}} " class="btn btn-app">
        <span class="badge bg-purple">{{$users}}</span>
        <i class="fa fa-briefcase"></i> Izin
      </a>

    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->