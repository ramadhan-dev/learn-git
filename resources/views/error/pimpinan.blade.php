@extends('layouts.main-error')

@section('title')
  Pimpinan
@endsection


@section('content')
 <section class="content" style="height: 700px;">
  <div class="error-page" style="margin-top:200px;">
    <h2 class="headline text-yellow"> OPSS</h2>
    <div class="error-content">
      <p style="color:white;padding-top: 60px; padding-left: 30px; font-size: 20px;">
        Hanya bisa di akses oleh Pimpinan <a href="{{ route('login')}}"><strong style="color:red;">Return Back </strong></a>
      </p>
    </div>
  </div>
</section>
@endsection
