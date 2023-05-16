@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h3 style="font-size:2.5em;" class="card-title"><b>Gestion de Mallas</b></h3>
                                <h4 class="card-category">Creación de mallas</h4>
                            </div>
                            <div class="card-body d-flex">
                                <div class="col-12 text-right">
                                    <h3 class="float-left">Tabla de datos </h3>
                                    <a href="{{ route('mallas.create') }} " class="btn btn-md btn-info ">
                                        <i class="material-icons mr-1">add</i>Crear</a>
                                </div>
                            </div>

                            <div class="table-responsive table-hover p-2">
                                <table class="table ">
                                    <thead class="text-primary thead-dark text-center">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>cedula</th>
                                        <th>H-trab</th>
                                        <th>Campaña</th>
                                        <th>Foco</th>
                                        <th>Encargado</th>
                                        <th>Semana-asig</th>
                                        <th>Dia descanso</th>
                                        <th class="text-center">Acciones</th>
                                    </thead>
                                    <tbody class="text-center">
                                       @foreach ($datos as $item)
                                    <tr>
                                            <td>{{$item -> users_id}}</td>
                                            <td>{{$item -> user -> name}}</td>
                                            <td>{{$item -> user -> cedula}}</td>
                                            <td>{{$item -> horastotal}}</td>
                                            <td>{{$item -> campaña}}</td>
                                            <td>{{$item -> foco}}</td>
                                            <td>{{$item -> encargado}}</td>
                                            <td>{{$item -> semana}}</td>
                                            <td>{{$item -> diadescanso}}</td>

                                            <td class="td-actions text-center">

                                                <form action="{{ route('mallas.edit', $item ->id) }}" method="GET"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas editar esta(s) Malla(s) ?')">
                                                    @csrf
                                                    <button href=" #" class="btn btn-success">
                                                        <i class="material-icons">edit</i></button>
                                                </form>
                                                <form action="{{ route('mallas.destroy', $item ->id) }}" method="POST"
                                                    style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas eliminar esta(s) Malla(s) ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button href="" class="btn btn-danger" rel="tooltip">
                                                        <i class="material-icons">close</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <form action="#">
                            <button type="submit" class="btn btn-success"
                                style="border-radius: 10px; margin-left:20px"><i
                                    class="material-icons">file_download</i>Descargar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection