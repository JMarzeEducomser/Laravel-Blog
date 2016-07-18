<div class="form-group{{ $errors->has('codigo')?' has-error':'' }}">
    {!! Form::label('codigo', 'Código', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('codigo', null, ['placeholder' => 'Ej. XXX-123', 'class' => 'form-control']) !!}

    @if($errors->has('codigo'))
    <span class="help-block">
        <strong>{{ $errors->first('codigo') }}</strong>
    </span>
    @endif

    </div>
</div>

<div class="form-group">
    {!! Form::label('titulo', 'Título', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::text('titulo', null, ['placeholder' => 'Ej. Nuevo Post', 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('contenido', 'Contenido', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::textarea('contenido', null, ['placeholder' => 'Ej. Contenido del post', 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('publicado', '¿Publicado?', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('publicado', [true => 'SI', false => 'NO'], true,  ['placeholder' => 'Ej. ¿Post publicado?', 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoría', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::select('categoria_id', $categorias, null,  ['placeholder' => 'Seleccione una categoría', 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Subir Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
    </div>
</div>


@section('script')

@parent

<script>
    //alert('Hola que tal!!!');
</script>
@endsection
