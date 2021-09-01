{!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="col s6">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['placeholder'=>'Ingresa el titulo del post']) !!}
        @error('title')
         <small>{{$message}}</small>
        @enderror
    </div>
    <div class="col s6">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['placeholder'=>'Ingresa el slug','readonly']) !!}
        @error('slug')
         <small>{{$message}}</small>
        @enderror

    </div>
    <div class="col s12">
        {!! Form::label('price', 'precio') !!}
        {!! Form::text('price', null, ['placeholder'=>'Escribe la url del video']) !!}
        @error('price')
         <small>{{$message}}</small>
        @enderror
    </div>
    <div class="col s12">
        {!! Form::label('category_id', 'Categorias') !!}
        {!! Form::select('category_id', $categories, null) !!}
        
        @error('category_id')
         <small>{{$message}}</small>
        @enderror
    </div>
    <div class="col s12">
        <p>Etiquetas</p>
        @foreach ($tags as $tag )
            <label>
                {!! Form::checkbox('tags[]', $tag->id, null,['class'=>'filled-in']) !!}
                <span>{{$tag->name}}</span>
            </label>
        @endforeach
        @error('tags')
         <small>{{$message}}</small>
        @enderror
    </div>
    <div class="col s12">
        <p>Estado</p>
        <label>
            {!! Form::radio('status', 1, true,['class'=>'with-gap']) !!}
            <span>Borrador</span>
        </label>
        <label>
            {!! Form::radio('status', 2,false,['class'=>'with-gap']) !!}
            <span>Publicado</span>
        </label>
    </div>
    <div class="col s12">
        <p>Imagen de post</p>
        <div class="row">
            <div class="col s6">
                @isset ($blog->image)
                <img id="picture" class="img-s" src="{{ Storage::url($blog->image->url) }}" alt="">
                @else
                    <img id="picture" class="img-s" src="https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_960_720.jpg" alt="">
                @endisset
            </div>
            <div class="col s6">
                {!! Form::label('file', 'Archivo de imagen') !!}
                <div class="file-field input-field">
                    <div class="btn">
                      <span>Archivo</span>
                      {!! Form::file('file', ['accept'=>'image/*']) !!}
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                    @error('file')
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis commodi, error velit exercitationem vel cupiditate. Est numquam quisquam distinctio asperiores labore.</p>
            </div>
        </div>
        
    </div>
    <div class="col s12">
        {!! Form::label('stract', 'Estracto') !!}
        {!! Form::textarea('stract', null, ['class'=>'materialize-textarea text-area-extract']) !!}
        @error('stract')
         <small>{{$message}}</small>
        @enderror
    </div>
                            
    <div class="col s12">
        {!! Form::label('description', 'Descripcion') !!}
        {!! Form::textarea('description', null, ['class'=>'materialize-textarea text-area-description']) !!}
        @error('description')
         <small>{{$message}}</small>
        @enderror
    </div>
    <div class="col s12">
        {!! Form::label('video_url', 'Video') !!}
        {!! Form::text('video_url', null, ['placeholder'=>'Escribe la url del video']) !!}
        @error('video_url')
         <small>{{$message}}</small>
        @enderror
    </div>
    