@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal - Edición de mallas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h2 class="card-title "><b>Edita los siguientes datos !</b> </h2>
                                <h4 class="card-category text-white"><b>Edición de mallas</b></h4>
                            </div>

                            <div class=" container-fluid  m-1 p-1">
                                <div class="m-4 p-4">
                                    <form action="{{route('mallas.update',$mallas ->id)}}" method="POST" class="" id="">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row d-flex justify-content-around mt-3">
                                            <div class="form-group col-sm-3 pt-0 mt-0 ">
                                                <label class="text-info" style="font-size:1.3em;" for="users_id">Nombre
                                                    Asesor</label>
                                                <select name="users_id" id="users_id" class="form-control"
                                                    aria-label="Default select example" required>

                                                    <option value="{{$mallas -> user -> name}}"></option>

                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3 p-4 ">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="semana">Semana-Asignada</label>
                                                <input type="week" class="form-control" name="semana" id="semana"
                                                    value="{{$mallas ->semana}}" required>
                                            </div>
                                            <div class="form-group col-sm-3 ">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="semana">Dia-descanso</label>
                                                <input type="date" class="form-control mt-3" name="diadescanso"
                                                    min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+4 days"));?>"
                                                    max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+11 days"));?>"
                                                    value="{{$mallas->diadescanso}}" id="diadescanso" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-around mt-1">

                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="campaña">Campaña</label>
                                                <input type="text" class="form-control mt-3" id="campaña" name="campaña"
                                                    value="{{$mallas ->campaña}}" required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="foco">Foco</label></label>
                                                <input type="text" class="form-control mt-3" name="foco" id="foco"
                                                    value="{{$mallas ->foco}}" required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="encargado">Encargado</label>
                                                <input type="text" class="form-control mt-3" name="encargado"
                                                    value="{{$mallas ->encargado}}" id="encargado" required>
                                            </div>
                                        </div>
                                        <div class=" mt-4 pt-4">
                                            <table class=" table table-hover w-100">
                                                <thead style="background:#00CED1;"
                                                    class="fw-bold text-light text-center">
                                                    <tr class="col-sm-auto m-0 p-0 d-grid justify-content-between">
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            Mallas/Gestión</th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold;"
                                                            scope="col">
                                                            Hr-trab
                                                        </th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">Hr
                                                            Ini
                                                        </th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            H-fin
                                                        </th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            H-fin-alm
                                                        </th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            H-ini-alm</th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            Desc ini</th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            Desc fin</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr class="col-sm-8 m-0 p-0 d-grid justify-content-center">
                                                        <th class="text-info text-center col-1"
                                                            style="font-size:1.5em;">
                                                            Lunes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesinicio" id="horainicio"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                value="{{$mallas -> lunesinicio}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesfinal" id="horafin"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                value="{{$mallas -> lunesfinal}}"></td>

                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunes_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> lun_alm_inicio}}">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunes_alm_final" id="almfin"
                                                                value="{{$mallas -> lun_alm_final}}"
                                                                onchange="calcular()" onclick="calcular()"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesdescanso1" id="desc1"
                                                                value="{{$mallas -> lunesdescanso1}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesdescanso2" id="desc2"
                                                                value="{{$mallas -> lunesdescanso2}}"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Martes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesinicio" id="horainicio"
                                                                value="{{$mallas -> martesinicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesfinal" id="horafin"
                                                                value="{{$mallas -> martesfinal}}" required></td>

                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martes_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> mar_alm_inicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martes_alm_final" id="almfin"
                                                                value="{{$mallas -> mar_alm_final}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesdescanso1" id="desc1"
                                                                value="{{$mallas -> martesdescanso1}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesdescanso2" id="desc2"
                                                                value="{{$mallas -> martesdescanso2}}" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Miercoles</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesinicio" id="horainicio"
                                                                value="{{$mallas -> miercolesinicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesfinal" id="horafin"
                                                                value="{{$mallas -> miercolesfinal}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercoles_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> mie_alm_inicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercoles_alm_final" id="almfin"
                                                                value="{{$mallas -> mie_alm_final}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesdescanso1" id="desc1"
                                                                value="{{$mallas -> miercolesdescanso1}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesdescanso2" id="desc2"
                                                                value="{{$mallas -> miercolesdescanso2}}" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Jueves</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesinicio" id="horainicio"
                                                                value="{{$mallas -> juevesinicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesfinal" id="horafin"
                                                                value="{{$mallas -> juevesfinal}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="jueves_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> jue_alm_inicio}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="jueves_alm_final" id="almfin"
                                                                value="{{$mallas -> jue_alm_final}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesdescanso1" id="desc1"
                                                                value="{{$mallas -> juevesdescanso1}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesdescanso2" id="desc2"
                                                                value="{{$mallas -> juevesdescanso2}}" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Viernes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesinicio" id="horainicio"
                                                                value="{{$mallas -> viernesinicio}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesfinal" id="horafin"
                                                                value="{{$mallas -> viernesfinal}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernes_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> vie_alm_inicio}}" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernes_alm_final" id="almfin"
                                                                value="{{$mallas -> vie_alm_final}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesdescanso1" id="desc1"
                                                                value="{{$mallas -> viernesdescanso1}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesdescanso2" id="desc2"
                                                                value="{{$mallas -> viernesdescanso2}}" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Sabado</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadoinicio" id="horainicio"
                                                                value="{{$mallas -> sabadoinicio}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadofinal" id="horafin"
                                                                value="{{$mallas -> sabadofinal}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabado_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> sab_alm_inicio}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabado_alm_final" id="almfin"
                                                                value="{{$mallas -> sab_alm_final}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadodescanso1" id="desc1"
                                                                value="{{$mallas -> sabadodescanso1}}" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadodescanso2" id="desc2"
                                                                value="{{$mallas -> sabadodescanso2}}" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Domingo</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingoinicio" id="horainicio"
                                                                value="{{$mallas -> domingoinicio}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingofinal" id="horafin"
                                                                value="{{$mallas -> domingofinal}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingodescanso1" id="desc1"
                                                                value="{{$mallas -> domingodescanso1}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingo_alm_inicio" id="alminicio"
                                                                value="{{$mallas -> dom_alm_inicio}}">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingo_alm_final" id="almfin"
                                                                value="{{$mallas -> dom_alm_final}}"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingodescanso2" id="desc2"
                                                                value="{{$mallas -> domingodescanso2}}"></td>
                                                    </tr>
                                                    <script>
                                                    function calcular(id1, id2, id3, id4, id5) {


                                                        let a = parseFloat(document.getElementById(id1).value) || 0;
                                                        let b = parseFloat(document.getElementById(id2).value) || 0;
                                                        let c = parseFloat(document.getElementById(id3).value) || 0;
                                                        let d = parseFloat(document.getElementById(id4).value) || 0;
                                                        let total = document.getElementById(id5).value = (b - a) - (
                                                            d - c) + "-horas";
                                                    }
                                                    </script>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-end m-4">
                                            <a class="btn btn-secundary" href="{{route('mallas.index')}}">Cancelar</a>
                                            <button type="submit" class="btn btn-info">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection