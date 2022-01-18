@extends('dashboard.master')
@section('content')


    <div class="form-group">
        <label for="title" >Titulo</label>
        <input readonly class="form-control" type="text" name="title" id="title" value="{{$post->title}}">

        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

    <div class="form-group">
        <label for="url_clear" >Url limpiar</label>
        <input readonly class="form-control" type="text" name="url_clear" id="url_clear" value="{{$post->url_clear}}">
    </div>


    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea readonly class="form-control" name="content" id="content" rows="3"> {{$post->content}} </textarea>
    </div>


@endsection