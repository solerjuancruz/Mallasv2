@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal- Creación de Mallas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <a class="btn btn-sm btn-info float-right" href="{{ route('mallas.index') }}"><i
                                        class="material-icons">reply</i></a>
                                <h3 class="card-title pl- "><b>Diligencia los siguientes datos</b> </h3>
                                <p class="card-category text-white">Creación de mallas</p>
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
                                                <label class="text-info" for="users_id"> <b>Nombre
                                                        Asesor</b></label>
                                                <select name="users_id" id="users_id" class="form-control"
                                                    aria-label="Default select example" required>
                                                    @foreach ($usuarios as $usuario)
                                                    <option value="{{ $usuario['id']}}">{{ $usuario['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3 p-4 ">
                                                <label class="text-info" for="semana"><b>Semana-Asignada</b></label>
                                                <input type="week" class="form-control" name="semana" id="semana"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3 ">
                                                <label class="text-info" for="semana"><b>Dia-descanso</b></label>
                                                <input type="date" class="form-control mt-3"
                                                    min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+4 days"));?>"
                                                    max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+11 days"));?>"
                                                    name="diadescanso" id="diadescanso" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-around mt-1">

                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="campaña"><b>Campaña</b></label>
                                                <input type="text" class="form-control mt-3" id="campaña" name="campaña"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="foco"><b>Foco</b></label></label>
                                                <input type="text" class="form-control mt-3" name="foco" id="foco"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="encargado"><b>Encargado</b></label>
                                                <input type="text" class="form-control mt-3" name="encargado"
                                                    id="encargado" required>
                                            </div>
                                        </div>
                                        <div class=" mt-4 pt-4 ">
                                            <table class=" table-sm table-hover ">
                                                <thead style="background:#00CED1;"
                                                    class="fw-bold text-light text-center">
                                                    <tr class="col-sm-auto m-0 p-0 d-grid justify-content-between">
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Mallas/Gestión</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold;"
                                                            scope="col">
                                                            Hr-trab
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">Hr
                                                            Ini
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-fin
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-ini-alm</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-fin-alm</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Desc ini</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Desc fin
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr class="col-sm-8 m-0 p-0 d-grid justify-content-center">
                                                        <th class="text-info text-center col-1" style="font-size:1rem;">
                                                            Lunes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name="" id="htrab"
                                                                disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="lunesinicio" id="horainicio"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                value="08:00:00"></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                type="time" name="lunesfinal" id="horafin"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                type="time" name="lunes_alm_inicio" id="alminicio"
                                                                value="13:00:00">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                type="time" name="lunes_alm_final" id="almfin"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                type="time" name="lunesdescanso1" id="desc1"
                                                                value="10:00:00"></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                type="time" name="lunesdescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem ;">
                                                            Martes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabmar" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesinicio" id="horainiciomar"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesfinal" id="horafinmar"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martes_alm_inicio" id="alminiciomar"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martes_alm_final" id="almfinmar"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martesdescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Miercoles</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabmie" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesinicio" id="horainiciomie"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesfinal" id="horafinmie"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercoles_alm_inicio"
                                                                id="alminiciomie" value="13:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercoles_alm_final" id="almfinmie"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercolesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercolesdescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Jueves</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabjue" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesinicio" id="horainiciojue"
                                                                value="08:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesfinal" id="horafinjue"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="jueves_alm_inicio" id="alminiciojue"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="jueves_alm_final" id="almfinjue"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="juevesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="juevesdescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Viernes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabvie" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesinicio" id="horainiciovie"
                                                                value="08:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesfinal" id="horafinvie"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernes_alm_inicio" id="alminiciovie"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernes_alm_final" id="almfinvie"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernesdescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernesdescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Sabado</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabsab" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadoinicio" id="horainiciosab"
                                                                value="08:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadofinal" id="horafinsab"
                                                                value="17:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabado_alm_inicio" id="alminiciosab"
                                                                value="13:00:00" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabado_alm_final" id="almfinsab"
                                                                value="14:00:00" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabadodescanso1" id="desc1"
                                                                value="10:00:00" required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabadodescanso2" id="desc2"
                                                                value="16:00:00" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Domingo</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabdom" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingoinicio" id="horainiciodom">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingofinal" id="horafindom"></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingo_alm_inicio" id="alminiciodom">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="domingo_alm_final" id="almfindom"
                                                                disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="domingodescanso1" id="desc1">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="domingodescanso2" id="desc2" disabled>
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
                                                const hora1Input = document.getElementById('alminicio');
                                                const hora2Input = document.getElementById('almfin');

                                                hora1Input.addEventListener('change', () => {
                                                    // Obtener el valor de la hora 1
                                                    const hora1Value = hora1Input.value;

                                                    // Crear un objeto de fecha con la fecha actual
                                                    const fechaActual = new Date();

                                                    // Obtener las horas y minutos de la hora 1
                                                    const [hora, minuto] = hora1Value.split(':');

                                                    // Configurar la fecha actual con las horas y minutos de la hora 1
                                                    fechaActual.setHours(hora);
                                                    fechaActual.setMinutes(minuto);

                                                    // Sumar una hora a la fecha actual
                                                    fechaActual.setHours(fechaActual.getHours() + 1);

                                                    // Obtener la hora y los minutos de la fecha actualizada
                                                    const hora2 = fechaActual.getHours().toString().padStart(2,
                                                        '0');
                                                    const minuto2 = fechaActual.getMinutes().toString()
                                                        .padStart(2, '0');

                                                    // Actualizar el valor del input de hora 2
                                                    hora2Input.value = `${hora2}:${minuto2}`;
                                                });
                                                </script>
                                            </table>
                                        </div>
                                        <div class=" d-flex justify-content-end m-4">
                                            <a class="btn btn-sm btn-secundary mr-2"
                                                onclick="return confirm('Deseas Cancelar?')"
                                                href="{{route('mallas.index')}}">Cancelar</a>
                                            <button type="submit" class="btn btn-sm btn-info">Guardar</button>
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