    @csrf

    <div class="form-group">
        <label for="title" >Titulo</label>
        <input class="form-control" type="text" name="title" id="title" value="{{old('title',$category->title)}}">


    </div>

    <div class="form-group">
        <label for="url_clear" >Url limpiar</label>
        <input class="form-control" type="text" name="url_clear" id="url_clear" value="{{old('url_clear',$category->url_clear)}}">
    </div>


    <input type="submit" value="Enviar" class="btn btn-primary">


