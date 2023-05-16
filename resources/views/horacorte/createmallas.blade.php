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
                                <h2 class="card-title pl- "><b>Diligencia los siguientes datos</b> </h2>
                                <h4 class="card-category text-white"><b>Creación de mallas</b></h4>
                            </div>
                            @if(session('danger'))
                            <div id="danger-message" class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
                            @endif

                            <!-- formulario nuevo -->
                            <div class=" container-fluid  m-1 p-1">
                                <div class="m-4 p-4">
                                    <form action="{{route('mallas.store')}}" method="POST" class="" id="">
                                        @csrf
                                        <div class="form-row d-flex justify-content-around mt-3">
                                            <div class="form-group col-sm-3 pt-0 mt-0 ">
                                                <label class="text-info" style="font-size:1.3em;" for="users_id">Nombre
                                                    Asesor</label>
                                                <select name="users_id" id="users_id" class="form-control"
                                                    aria-label="Default select example" required>
                                                    @foreach ($usuarios as $usuario)
                                                    <option value="{{ $usuario['id']}}">{{ $usuario['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3 p-4 ">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="semana">Semana-Asignada</label>
                                                <input type="week" class="form-control" name="semana" id="semana"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3 ">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="semana">Dia-descanso</label>
                                                <input type="date" class="form-control mt-3"
                                                    min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+4 days"));?>"
                                                    max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+11 days"));?>"
                                                    name="diadescanso" id="diadescanso" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-around mt-1">

                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="campaña">Campaña</label>
                                                <input type="text" class="form-control mt-3" id="campaña" name="campaña"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="foco">Foco</label></label>
                                                <input type="text" class="form-control mt-3" name="foco" id="foco"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" style="font-size:1.3em;"
                                                    for="encargado">Encargado</label>
                                                <input type="text" class="form-control mt-3" name="encargado"
                                                    id="encargado" required>
                                            </div>
                                        </div>
                                        <div class=" mt-4 pt-4 ">
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
                                                            Desc 1
                                                        </th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            H-ini-alm</th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            H-fin-alm</th>
                                                        <th class="col-1" style="font-size:1.5em; font-weight: bold; "
                                                            scope="col">
                                                            Desc 1</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
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
                                                                value="08:00:00"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesfinal" id="horafin"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                value="17:00:00"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesdescanso1" id="desc1"
                                                                value="10:00:00"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                type="time" name="lunes_alm_inicio" id="alminicio"
                                                                value="13:00:00">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                type="time" name="lunes_alm_final" id="almfin"
                                                                value="14:00:00" onchange="calcular()"
                                                                onclick="calcular()"></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="lunesdescanso2" id="desc2"
                                                                value="16:00:00"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Martes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabmar" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesinicio" id="horainiciomar"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesfinal" id="horafinmar"
                                                                value="17:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martes_alm_inicio" id="alminiciomar"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martes_alm_final" id="almfinmar"
                                                                value="14:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="martesdescanso2" id="desc2"
                                                                value="16:00:00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Miercoles</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabmie" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesinicio" id="horainiciomie"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesfinal" id="horafinmie"
                                                                value="17:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercoles_alm_inicio"
                                                                id="alminiciomie" value="13:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercoles_alm_final" id="almfinmie"
                                                                value="14:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="miercolesdescanso2" id="desc2"
                                                                value="16:00:00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Jueves</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabjue" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesinicio" id="horainiciojue"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesfinal" id="horafinjue"
                                                                value="17:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="jueves_alm_inicio" id="alminiciojue"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="jueves_alm_final" id="almfinjue"
                                                                value="14:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="juevesdescanso2" id="desc2"
                                                                value="16:00:00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Viernes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabvie" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesinicio" id="horainiciovie"
                                                                value="08:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesfinal" id="horafinvie"
                                                                value="17:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernes_alm_inicio" id="alminiciovie"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernes_alm_final" id="almfinvie"
                                                                value="14:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="viernesdescanso2" id="desc2"
                                                                value="16:00:00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Sabado</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabsab" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadoinicio" id="horainiciosab"
                                                                value="08:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadofinal" id="horafinsab"
                                                                value="17:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadodescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabado_alm_inicio" id="alminiciosab"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabado_alm_final" id="almfinsab"
                                                                value="14:00:00" required></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="sabadodescanso2" id="desc2"
                                                                value="16:00:00" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1.5em ;">
                                                            Domingo</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size: 1.5rem;" type="text" name=""
                                                                id="htrabdom" disabled></td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingoinicio" id="horainiciodom">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingofinal" id="horafindom">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingodescanso1" id="desc1">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingo_alm_inicio" id="alminiciodom">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingo_alm_final" id="almfindom">
                                                        </td>
                                                        <td><input style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;"
                                                                type="time" name="domingodescanso2" id="desc2">
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                                            </table>
                                        </div>
                                        <div class=" d-flex justify-content-end m-4">
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