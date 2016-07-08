@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-heading">
                <i class="fa fa-btn fa-trash"></i>Eliminar categoría
            </div>

            <div class="panel-body">
                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE"/>

                    <div class="form-group">
                        <h3>¿Está seguro de eliminar la categoría: <i>{{ $categoria->nombre }}</i>?</h3>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" value="SI" class="btn btn-danger"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
