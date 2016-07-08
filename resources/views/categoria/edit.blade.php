@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-heading">
                <i class="fa fa-btn fa-edit"></i>Editar categoría
            </div>

            <div class="panel-body">
                <form action="{{ route('categoria.update', $categoria->id) }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT"/>

                    <div class="form-group">
                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $categoria->nombre }}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" value="Guardar" class="btn btn-warning"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
