@extends('layouts.main-error')
@section('title')
internal errro
@endsection
@section('content')
<section class="content" style="height: 700px;">
  <div class="error-page" style="margin-top:200px;">
    <h2 class="headline text-yellow"> 404</h2>
    <div class="error-content">
      <h3><i class="fa fa-warning text-yellow"></i> Oops! Internal server error.</h3>
      <p style="color:white;">
        We could not find the page you were looking for.
        Meanwhile, you may <a href="{{ route('login') }}"><strong style="color:red;">Return Back </strong></a> or try using the search form.
      </p>
    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
</div>
@endsection