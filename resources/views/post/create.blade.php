@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-heading">
                <i class="fa fa-btn fa-plus"></i>Agregar nuevo post
            </div>

            <div class="panel-body">

                @if(count($errors) > 0)
                <div class="validation-messages">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::open(['route' => 'admin.post.store', 'method' => 'post', 'class' => 'form-horizontal']) !!}

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
                    <div class="col-md-6 col-md-offset-4">
                        <input type="submit" value="Guardar" class="btn btn-success"/>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
