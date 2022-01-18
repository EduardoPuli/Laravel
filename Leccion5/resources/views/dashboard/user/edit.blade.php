@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

<form action="{{ route("user.update", $user->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.user.create_form',['pasw' => false])
</form>

@endsection




