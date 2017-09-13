<table  class="table example1 table-bordered table-hover">
  <thead>
    <tr>
      <th style="width:5%">No</th>
      <th style="width:30%">Name</th>
      <th style="width:40%">Email</th>
      <th style="width:15%">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $admins as $admin)
    <tr>
      <td>{{ $loop->index +1 }} </td>
      <td>{{ $admin->nama }} </td>
      <td>{{ $admin->email }} </td>
      <td>
        <a href="{{'user/'.$admin->id.'/edit'}}" class="btn btn-info btn-xs">Edit</a>
        {!!Form::open(
          array('route' =>  array('user.destroy', $admin->id),
          'method' => 'DELETE',
          '_tokrn' => 'csrf_token()',
          'style' => 'display:inline' )
        )!!}
        <input type="submit" value="Delete" class="btn btn-xs bg-warning">
        {!!Form::close()!!}
      </td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>
  </tfoot>
</table>