<div class="col s12">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class'=>'validate','placeholder'=>'Ingrese un nombre de categoría']) !!}
    @error('name')
        <small>{{$message}}</small><br/>
    @enderror
</div>
<div class="col s12">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class'=>'validate ', 'readonly']) !!}
    @error('slug')
        <small>{{$message}}</small><br/>
    @enderror   
</div>
<div class="col s12">
    {!! Form::label('color', 'Color') !!}
    {!! Form::text('color', null, ['class'=>'validate','placeholder'=>'Ingrese un color']) !!}
    @error('color')
    <small>{{$message}}</small><br/>
    @enderror
</div>