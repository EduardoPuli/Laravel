@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route("post.store") }}" method="POST">
    @include('dashboard.post.create_form')
</form>

@endsection




