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
    @foreach( $backs as $back)
    <tr>
      <td>{{ $loop->index +1 }} </td>
      <td>{{ $back->nama }} </td>
      <td>{{ $back->email }} </td>
      <td>
        <a href="{{'user/'.$back->id.'/edit'}}" class="btn n btn-info btn-xs">Edit</a>
        {!!Form::open(
          array('route' =>  array('user.destroy', $back->id),
          'method' => 'DELETE',
          '_tokrn' => 'csrf_token()',
          'style' => 'display:inline' )
        )!!}
        <input type="submit" value="Delete" class="btn btn-warning btn-xs ">
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