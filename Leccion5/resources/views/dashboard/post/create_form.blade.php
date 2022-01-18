    @csrf

    <div class="form-group">
        <label for="title" >Titulo</label>
        <input class="form-control" type="text" name="title" id="title" value="{{old('title',$post->title)}}">

        @error('title')
        <small class="text-danger">{{$message}}</small>
        @enderror

    </div>

    <div class="form-group">
        <label for="url_clear" >Url limpiar</label>
        <input class="form-control" type="text" name="url_clear" id="url_clear" value="{{old('url_clear',$post->url_clear)}}">
    </div>

    <div class="form-group">
        <label for="category_id" > Categorias </label>

        <select class="form-control" name="category_id" id="category_id"> 
            @foreach ($categories ?? '' as $title => $id)
                <option {{ $post->category_id == $id ? 'selected="selected"' : '' }}  value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="posted" > Posted </label>
        <select class="form-control" name="posted" id="posted"> 
            @include('dashboard.partials.optin-yes-not', ['val' => $post -> $posted])
        </select>
    </div>

    <div class="form-group">
        <label for="content">Contenido</label>
        <textarea class="form-control" name="content" id="content" rows="3"> {{old('content', $post->content)}} </textarea>
    </div>

    <input type="submit" value="Enviar" class="btn btn-primary">


