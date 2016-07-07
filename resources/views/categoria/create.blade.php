@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-heading">
                <i class="fa fa-btn fa-plus"></i>Agregar nueva categoría
            </div>

            <div class="panel-body">
                <form action="{{ route('categoria.store') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" id="nombre" name="nombre" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" value="Guardar" class="btn btn-success"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
