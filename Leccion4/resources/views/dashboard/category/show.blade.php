@extends('dashboard.master')
@section('content')


    <div class="form-group">
        <label for="title" >Titulo</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{$category->title}}">

        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

    <div class="form-group">
        <label for="url_clear" >Url limpiar</label>
        <input readonly class="form-control" type="text" name="url_clear" id="url_clear" value="{{$category->url_clear}}">
    </div>


@endsection