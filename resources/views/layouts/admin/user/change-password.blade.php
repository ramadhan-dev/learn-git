@extends('layouts.main')

@section('title','Change Password')
	

@section('content')
{{-- Block Pertama --}}
@include('components.admin.user.change-password')
{{-- End Block Pertama --}}
@endsection