@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-btn fa-list"></i>Lista de Categorías
                </div>

                <div class="panel-body">
                    <a href="{{ route('categoria.create') }}" class="btn btn-success">
                        <i class="fa fa-btn fa-plus"></i>Nuevo
                    </a>
                    <hr/>
                    <table class="table table-hover">
                        <tr class="table-header">
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>

                        @foreach($categorias as $categoria)
                        <tr class="table-body">
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="panel-footer"></div>
            </div>

        </div>
    </div>
</div>
@endsection
