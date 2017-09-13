@extends('layouts.main')
@section('content')

@section('title', 'Administrator')

{{-- Block Pertama --}}
@include('components.admin.user.main')
{{-- End Block Pertama --}}


@endsection