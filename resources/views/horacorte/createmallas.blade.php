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
                                <a class="btn btn-sm btn-info float-right" href="{{ route('mallas.index') }}"><i class="material-icons">reply</i></a>
                                <h3 class="card-title pl- "><b>Diligencia los siguientes datos</b> </h3>
                                <p class="card-category text-white">Creación de mallas</p>
                            </div>
                            @if(session('danger'))
                            <div id="danger-message" class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
                            @endif

                            <!-- formulario nuevo -->
                            <div class=" container-fluid m-1 p-1 ">
                                <div class="m-4 p-4">
                                    <form action="{{route('mallas.store')}}" method="POST" class="" id="formulario-mallas">
                                        @csrf
                                        <div class="form-row d-flex justify-content-around  mt-3">
                                            <div class="form-group col-sm-3 pt-0 mt-0 ">
                                                <label class="text-info" for="users_id"> <b>Nombre
                                                        Asesor</b></label>
                                                <select name="users_id[]" id="users_id" class="form-comtrol" size="2" multiple>
                                                    @foreach ($usuarios as $usuario)
                                                    <option value="{{ $usuario['id']}}">{{ $usuario['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3 pt-0 mt-0 ">

                                                <label for="horario" class="text-info"><b>Formatos de
                                                        horario</b></label>
                                                <select class="form-control" onchange="autocompletarinput()" onclick="autocompletarinput()" name="horario" id="horario">
                                                    <option value="" selected>Selecciona</option>
                                                    <option value="opcion1">L-V 8am-5pm /S 8am-4pm</option>
                                                    <option value="opcion2">L-V 8am-6pm /S 8am-11pm</option>
                                                    <option value="opcion3">L-V 9am-6pm /S 8am-4pm</option>
                                                    <option value="opcion4">L-V 8am-5:30pm /S 8am-1pm</option>
                                                    <option value="opcion5">L-V 7am-4pm /S 8am-4pm</option>
                                                    <option value="opcion6">limpiar</option>
                                                </select>


                                            </div>
                                            <div class="form-group col-sm-3 p-4  ">
                                                <label class="text-info" for="semana"><b>Semana-Asignada</b></label>
                                                <input type="week" class="form-control" name="semana" id="semana" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-around  mt-2">

                                            <div class="form-group col-sm-2 mt-4">
                                                <label class="text-info " for="campaña"><b>Campaña</b></label>
                                                <input type="text" value="movistar" class="form-control mt-3" id="campaña" name="campaña">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="foco"><b>Foco</b></label></label>
                                                <select class="form-control" name="foco">
                                                    <option selected>Selecciona</option>
                                                    <option value="Inbound">Inbound</option>
                                                    <option value="Phoenix">Phoenix</option>
                                                    <option value="Portabilidad">Portabilidad</option>
                                                    <option value="Prepost">Prepost</option>
                                                    <option value="Staff Administrativo">Staff Administrativo</option>
                                                    <option value="Staff Calidad">Staff Calidad</option>
                                                    <option value="Staff Comercial">Staff Comercial</option>
                                                    <option value="Staff Datos Metricas Y Workforce">Staff Datos Metricas Y Workforce</option>
                                                    <option value="taff Desarrollo">Staff Desarrollo</option>
                                                    <option value="Staff Diseño">Staff Diseño</option>
                                                    <option value="Staff Financiero">Staff Financiero</option>
                                                    <option value="taff Gerencial">Staff Gerencial</option>
                                                    <option value="Staff Gestión Organizacional y Método">Staff Gestión Organizacional y Método</option>
                                                    <option value="Staff It">Staff It</option>
                                                    <option value="Staff RRHH">Staff RRHH</option>
                                                    <option value="Staff Validacion">Staff Validacion</option>
                                                    <option value="Up Grade">Up Grade</option>
                                                    <option value="Whatsapp Digital">Whatsapp Digital</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="encargado"><b>Encargado</b></label>
                                                <br>
                                                <select class="form-control" name="encargado">
                                                    <option selected>Selecciona</option>
                                                    <option value="Juan David Cetina Ochoa">Juan David Cetina Ochoa</option>
                                                    <option value="Maria Alejandra Adan Sarmiento">Maria Alejandra Adan Sarmiento</option>
                                                    <option value="Rafael Augusto Archila Soracipa">Rafael Augusto Archila Soracipa</option>
                                                    <option value="Luis Eduardo Bohorquez Buitrago">Luis Eduardo Bohorquez Buitrago</option>
                                                    <option value="Camilo Esteban Romero Leiva">Camilo Esteban Romero Leiva</option>
                                                    <option value="Xiomara Liceth Yule Rivera">Xiomara Liceth Yule Rivera</option>
                                                    <option value="Carlos Daniel Rincon Uneme">Carlos Daniel Rincon Uneme</option>
                                                    <option value="Jhon Sebastian Alape Leyton">Jhon Sebastian Alape Leyton</option>
                                                    <option value="Juan David Vasquez Salazar">Juan David Vasquez Salazar</option>
                                                    <option value="Andres Eduardo Salcedo Guillen">Andres Eduardo Salcedo Guillen</option>
                                                    <option value="Daniel Andres Luengas Caballero">Daniel Andres Luengas Caballero</option>
                                                    <option value="Daniel Ricardo Palacios Bustos">Daniel Ricardo Palacios Bustos</option>
                                                    <option value="David Edilberto Gonzalez Hernandez">David Edilberto Gonzalez Hernandez</option>
                                                    <option value="Erik David Restrepo Garzon">Erik David Restrepo Garzon</option>
                                                    <option value="Gabriel David Cabarcas Ribon">Gabriel David Cabarcas Ribon</option>
                                                    <option value="Jenifer Nicol Suaza Giraldo">Jenifer Nicol Suaza Giraldo</option>
                                                    <option value="Jennifer Alejandra Monroy Ortiz">Jennifer Alejandra Monroy Ortiz</option>
                                                    <option value="Jenny Patricia Barbosa Alvarado">Jenny Patricia Barbosa Alvarado</option>
                                                    <option value="Jenny Rocio Murillo Meneses">Jenny Rocio Murillo Meneses</option>
                                                    <option value="Jesus Antonio Archila Soracipa">Jesus Antonio Archila Soracipa</option>
                                                    <option value="Karen Julissa Auzaque Combita">Karen Julissa Auzaque Combita</option>
                                                    <option value="Nicolas Salazar Delgadillo">Nicolas Salazar Delgadillo</option>
                                                    <option value="Ingrid Johanna Amaya Rincon">Ingrid Johanna Amaya Rincon</option>
                                                    <option value="Maria Jacqueline Arias De Pindray">Maria Jacqueline Arias De Pindray</option>
                                                    <option value="Carlos Alberto Trujillo Vargas">Carlos Alberto Trujillo Vargas</option>
                                                    <option value="Johanna Paola Castrillon Londoño">Johanna Paola Castrillon Londoño</option>
                                                    <option value="Andres Eduardo Vargas Valenzuela">Andres Eduardo Vargas Valenzuela</option>
                                                    <option value="Harold Andres Cardenas Gutierrez">Harold Andres Cardenas Gutierrez</option>
                                                    <option value="Jose Luis Aponte Blanco">Jose Luis Aponte Blanco</option>
                                                    <option value="Linna Lizeth Martinez Sanchez">Linna Lizeth Martinez Sanchez</option>
                                                    <option value="Miguel Leonardo Tocora Campos">Miguel Leonardo Tocora Campos</option>
                                                    <option value="Jesus Antonio Viana Marín">Jesus Antonio Viana Marín</option>
                                                    <option value="Carlos Orlando Pastrana Acevedo">Carlos Orlando Pastrana Acevedo</option>
                                                    <option value="Johan Esteban Riaño Muñoz">Johan Esteban Riaño Muñoz</option>
                                                    <option value="Leidy Milena Quiroga Castañeda">Leidy Milena Quiroga Castañeda</option>
                                                    <option value="Magda Lorena Ramirez Ospina">Magda Lorena Ramirez Ospina</option>
                                                    <option value="Gerencia General">Gerencia General</option>
                                                    <option value="Anderson Fernando Soler Caro">Anderson Fernando Soler Caro</option>
                                                    <option value="Juan Jose Cano Salazar">Juan Jose Cano Salazar</option>
                                                    <option value="Mabel Barragan Salazar">Mabel Barragan Salazar</option>
                                                    <option value="Arias De Pindray Maria Jacqueline">Arias De Pindray Maria Jacqueline</option>
                                                    <option value="Laura Vanesa Currea">Laura Vanesa Currea</option>
                                                    <option value="William Leonardo Torres Peña">William Leonardo Torres Peña</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-sm-2 mt-4 ">
                                                <label class="text-info " for="semana"><b>Dia-descanso</b></label>
                                                <input type="date" class="form-control mt-3" oninput="DiaDescanso()" onclick="Reset()" onchange="semanaSiguiente()" name="diadescanso" id="diadescanso" required>
                                            </div>
                                        </div>

                                        <div class=" mt-4 pt-4 ">
                                            <table class=" table-responsive table-hover" id="tabla-horarios">
                                                <thead class="fw-bold text-light text-center" id="thead-horarios">
                                                    <tr class="col-sm-autom-0 p-0 d-grid justify-content-between">
                                                        <th class="col-1" scope="col">Mallas/Gestión</th>
                                                        <th class="col-1" scope="col">Hr-trab</th>
                                                        <th class="col-1" scope="col">Hr-Ini</th>
                                                        <th class="col-1" scope="col">H-fin</th>
                                                        <th class="col-1" scope="col">H-ini-alm</th>
                                                        <th class="col-1" scope="col">H-fin-alm</th>
                                                        <th class="col-1" scope="col">Break ini</th>
                                                        <th class="col-1" scope="col">Break fin</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center" id="tabla-body-horarios">
                                                    <tr class="col-sm-8m-0 p-0 d-grid justify-content-center">
                                                        <th class="text-info text-center col-1">
                                                            Lunes</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrab" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="lunesinicio" id="horainicio" onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')" onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')" value=""></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')" onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')" type="time" name="lunesfinal" id="horafin" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminicio','almfin')" type="time" name="lunes_alm_inicio" id="alminicio" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="lunes_alm_final" id="almfin" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totaldes('descinilun','descfinlun')" onchange="totaldes('descinilun','descfinlun')" type="time" name="lunesdescanso1" id="descinilun" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="lunesdescanso2" id="descfinlun" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Martes</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabmar" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')" onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')" type="time" name="martesinicio" id="horainiciomar" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')" onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')" type="time" name="martesfinal" id="horafinmar" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  onclick="totalalm('alminiciomar','almfinmar')" type="time" name="martes_alm_inicio" id="alminiciomar" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  type="time" name="martes_alm_final" id="almfinmar" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  type="time" name="martesdescanso1" id="descinimar" onclick="totaldes('descinimar','descfinmar')" onchange="totaldes('descinimar','descfinmar')" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0"  type="time" name="martesdescanso2" id="descfinmar" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Miercoles</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabmie" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')" onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')" type="time" name="miercolesinicio" id="horainiciomie" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')" onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')" type="time" name="miercolesfinal" id="horafinmie" value=""></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminiciomie','almfinmie')" type="time" name="miercoles_alm_inicio" id="alminiciomie" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="miercoles_alm_final" id="almfinmie" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="miercolesdescanso1" id="descinimie" onclick="totaldes('descinimie','descfinmie')" onchange="totaldes('descinimie','descfinmie')" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="miercolesdescanso2" id="descfinmie" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Jueves</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabjue" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')" onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')" type="time" name="juevesinicio" id="horainiciojue" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')" onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')" type="time" name="juevesfinal" id="horafinjue" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminiciojue','almfinjue')" onchange="totalalm('alminiciojue','almfinjue')" type="time" name="jueves_alm_inicio" id="alminiciojue" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="jueves_alm_final" id="almfinjue" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="juevesdescanso1" id="descinijue" onchange="totaldes('descinijue','descfinjue')" onclick="totaldes('descinijue','descfinjue')" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="juevesdescanso2" id="descfinjue" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Viernes</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabvie" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')" 
                                                            onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')" type="time" name="viernesinicio" id="horainiciovie" value=""></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')" onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')" type="time" name="viernesfinal" id="horafinvie" value=""></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminiciovie','almfinvie')" type="time" name="viernes_alm_inicio" id="alminiciovie" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="viernes_alm_final" id="almfinvie" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="viernesdescanso1" id="descinivie" 
                                                            onchange="totaldes('descinivie','descfinvie')" onclick="totaldes('descinivie','descfinvie')" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="viernesdescanso2" id="descfinvie" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Sabado</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabsab" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')" 
                                                            onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')" type="time" name="sabadoinicio" id="horainiciosab" value=""></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')" 
                                                            onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')" type="time" name="sabadofinal" id="horafinsab" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminiciosab','almfinsab')" type="time" name="sabado_alm_inicio" id="alminiciosab" value="">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="sabado_alm_final" id="almfinsab" value="" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="sabadodescanso1" id="descinisab" onchange="breaksab('descinisab','descfinsab')" 
                                                            onclick="breaksab('descinisab','descfinsab')" value="" required></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="sabadodescanso2" id="descfinsab" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">
                                                            Domingo</th>
                                                        <td><input class="form-control text-info text-center"  type="text" name="" id="htrabdom" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')" 
                                                            onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')" type="time" name="domingoinicio" id="horainiciodom">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')" 
                                                            onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')" type="time" name="domingofinal" id="horafindom"></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onclick="totalalm('alminiciodom','almfindom')" type="time" name="domingo_alm_inicio" id="alminiciodom">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="domingo_alm_final" id="almfindom" disabled></td>
                                                        <td><input class="btn-sm p-sm-1 m-0" onchange="totaldes('descinidom','descfindom')" 
                                                            onclick="totaldes('descinidom','descfindom')" type="time" name="domingodescanso1" id="descinidom">
                                                        </td>
                                                        <td><input class="btn-sm p-sm-1 m-0" type="time" name="domingodescanso2" id="descfindom" disabled>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center">Total Horas</th>
                                                        <td><input class="form-control text-info text-center" type="text" name="" id="total-horas" onchange="prueba()" onclick="prueba()"></td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                            <div class="form-floating  border col-md-12  mt-3 p-2">
                                                <label class="text-info" for="observaciones"><b>Ingresa tu
                                                        Observación</b></label>
                                                <textarea class="form-control" placeholder="Observaciones..." id="observaciones"></textarea>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-end m-4">
                                            <a class="btn btn-sm btn-secundary mr-2" onclick="return confirm('Deseas Cancelar?')" href="{{route('mallas.index')}}">Cancelar</a>
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