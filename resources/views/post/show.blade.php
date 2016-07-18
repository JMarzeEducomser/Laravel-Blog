@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-heading">
                <i class="fa fa-btn fa-trash"></i>Eliminar post
            </div>

            <div class="panel-body">

                {!! Form::open(['route' => ['admin.post.destroy', $post->codigo], 'method' => 'delete']) !!}
                <h3>
                    ¿Está seguro de eliminar el post con código: <i>{{ $post->codigo }}</i>?
                </h3>

                <input type="submit" value="SI" class="btn btn-danger"/>

                {!! link_to_route('admin.post.index', 'NO', [], ['class' => 'btn btn-default']) !!}

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
