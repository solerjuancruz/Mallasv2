@extends('layouts.main', ['activePage' => '', 'titlePage' => ''])
@section('content')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <h6 style="margin-top: 50px; margin-left:30px;margin-bottom:-100px">Ultima Conexión: {{ Auth::user()->last_login }}
    </h6>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- TITULO Y RELOJ --}}
                            <center>
                                <h3
                                    style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">
                                    BIENVENIDO {{ Auth::user()->name }}</h3>
                                <h1 style="font-weight: bold; text-aline:center;">PANEL DE REGISTRO DE TIEMPOS
                                </h1>
                            </center>
                            <div class="row">
                                <div class="card" style="background-color: transparent; width:100%">
                                    <center>

                                        <body input type="time" style="font-size: 20px;  border-radius:0.75rem;"
                                            onload="HoraActual(<?php echo date('H') . ', ' . date('i') . ', ' . date('s'); ?>)">
                                            <div id="contenedor_reloj"
                                                style="width: 400px; font-size:30px; font-family: Lucida Console, Courier New , monospace; text-align:center; margin-left:0;">
                                            </div>
                                            <link rel="shortcut icon" href="">
                                            <div style=" margin-left:0;">
                                                <script>
                                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                                        "Octubre", "Noviembre", "Diciembre");
                                                    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                                                    var f = new Date();
                                                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f
                                                        .getFullYear());
                                                </script>
                                            </div>

                                        </body>
                                </div>
                            </div>
                            <div><input type="hidden" name="ingreso" id="ingreso"
                                    value="{{ old('ingreso', $ciclosos->ingreso) }}">
                            </div>
                            <div><input type="hidden" name="llave" id="llave" value="{{ $llave }}"></div>
                            </body>
                            <div id="cuenta"></div>
                            {{-- INICIO SECCION 1 --}}
                            <div style="margin-top: 10px">
                                <div class="row" style="margin:3px">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div style="margin: 10px">
                                                <strong>
                                                    <p class="card-text" style="color:rgb(0, 0, 0)">Turno</p>
                                                </strong>
                                                <div class="col-sm-6">
                                                    <p class="card-text reloj-text"><small
                                                            class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name=""
                                                                    value="{{ $ciclosos->ingreso }}" disabled
                                                                    style="width:70px;background-color: transparent;border:none">
                                                            </e>
                                                        </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small
                                                            class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name=""
                                                                    class="" value="{{ $ciclosos->salida }}"
                                                                    disabled
                                                                    style="width:70px;background-color: transparent;border:none">
                                                            </e>
                                                        </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small
                                                            class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name=""
                                                                    class="" value="{{ $ciclosos->total }}"
                                                                    disabled
                                                                    style="width:70px;background-color: transparent;border:none">
                                                            </e>
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div style="margin: 10px">
                                                <strong>
                                                    <p class="card-text" style="color:rgb(0, 0, 0)">Break</p>
                                                </strong>
                                                <div class="col-sm-6">
                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                        <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->breakin}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                        <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->breakout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                        <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timebreak}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div style="margin: 10px">
                                                <strong>
                                                    <p class="card-text" style="color:rgb(0, 0, 0)">Almuerzo</p>
                                                </strong>
                                                <div class="col-sm-6">
                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                        <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->almuerzo}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                        <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->almuerzoout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>

                                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                        <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timelunch}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- INICIO SECCION 2 --}}
                                <div style="margin-top: 10px">
                                    <div class="row" style="margin:3px">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Capacitación
                                                        </p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->capacitacion}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->capout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timecap}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Pausas Activas
                                                        </p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->pausas}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->pausasout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timepausas}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Daño Tecnico
                                                        </p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <script>
                                                            function digiClock() {
                                                                var crTime = new Date();
                                                                var crHrs = crTime.getHours();
                                                                var crMns = crTime.getMinutes();
                                                                var crScs = crTime.getSeconds();
                                                                crMns = (crMns < 10 ? "0" : "") + crMns;
                                                                crScs = (crScs < 10 ? "0" : "") + crScs;
                                                                var timeOfDay = (crHrs < 12) ? "AM" : "PM";
                                                                crHrs = (crHrs > 12) ? crHrs - 12 : crHrs;
                                                                crHrs = (crHrs == 0) ? 12 : crHrs;
                                                                var crTimeString = crHrs + ":" + crMns + ":" + crScs + " " + timeOfDay;

                                                                $("#clock").html(crTimeString);
                                                            }
                                                            $(document).ready(function() {
                                                                setInterval('digiClock()', 1000);

                                                            });
                                                        </script>
                                                        <form action="{{ url('/cicloaveriaout/' . $ciclosos->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            @method('PATCH')

                                                            <p class="card-text reloj-text">
                                                                <small  class="text-muted2"><b>Inicio:</b>
                                                                <e class="tiemp-text"> 
                                                                    <input id="" name="" class="" value="{{ $ciclosos->daño }}" disabled style="width:70px;background-color: transparent;border:none">
                                                                    <input id="" name="daño" class="daño" value="{{ $ciclosos->daño }}" hidden >  
                                                                    
                                                                </e>
                                                            </small>
                                                        </p>
                                                            <h1 id="clock" style="font-size: 20px; margin-left:16px"></h1>
    
                                                            
                                                            <input type="" id="dañoout" name="dañoout" class="form-control"
                                                            value="{{ $hora }}" required hidden>

                                                            <input type='submit' class="botones text-white btn btn-info"
                                                            value='Fin' style="margin-left:100px" onclick="finalizaraveria()">
                                                                   
                                                            {{--function de finalizar turno --}}
                                                            <script>
                                                              function finalizaraveria()
                                                                {
                                                                    var confirsalida = confirm("Desea Finalizar Daño tecnico?");
                                                                    if (confirsalida == false) 
                                                                         {
                                                                            event.preventDefault();
                                                                         }
                                                                         else{
                                                                         }
                                                                }
                                                            </script>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- INICIO SECCION 3 --}}
                                <div class="" style="margin-top: 10px">
                                    <div class="row" style="margin:3px">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Evaluación</p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->evaluacion}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->evaluacionout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timeeva}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Retro</p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->retro}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->retroout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timeretro}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="card">
                                                <div style="margin: 10px">
                                                    <strong>
                                                        <p class="card-text" style="color:rgb(0, 0, 0)">Reunión</p>
                                                    </strong>
                                                    <div class="col-sm-6">
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b>
                                                            <e class="tiemp-text"> <input id="" name="" value="{{ $ciclosos->reunion}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->reunionout}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
    
                                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo:</b>
                                                            <e class="tiemp-text"> <input id="" name="" class="" value="{{ $ciclosos->timereunion}}" disabled style="width:70px;background-color: transparent;border:none"></e> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<style>
    .reloj-text {
        width: 190px;
        margin-left: -20px;
        padding: 0px;
    }

    .tiemp-text {
        margin-left: 10px;
    }

    .style_card {
        width: 100%;
        height: 235px;
        margin-bottom: 5px;
    }

</style>


<script type="text/javascript">
    setTimeout(function() {
        location.reload("contenedor_reloj");
    }, 60000);
</script>
