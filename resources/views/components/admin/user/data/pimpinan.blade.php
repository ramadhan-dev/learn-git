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
    @foreach( $pimpinans as $pimpinan)
    <tr>
      <td>{{ $loop->index +1 }} </td>
      <td>{{ $pimpinan->nama }} </td>
      <td>{{ $pimpinan->email }} </td>
      <td>
        <a href="{{'user/'.$pimpinan->id.'/edit'}}" class="btn bg-info btn-xs">Edit</a>
        {!!Form::open(
          array('route' =>  array('user.destroy', $pimpinan->id),
          'method' => 'DELETE',
          '_tokrn' => 'csrf_token()',
          'style' => 'display:inline' )
        )!!}
        <input type="submit" value="Delete" class="btn btn-warning bg-navy">
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