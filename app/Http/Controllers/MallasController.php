<?php

namespace App\Http\Controllers;
use App\Models\Malla;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Exports\MallaExport;
use Illuminate\Database\QueryException;

class MallasController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Malla::all();
        return view('horacorte.mallas',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('horacorte.createmallas', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $days = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado','domingo'];
       $total= 0;
       
       $mallas = new Malla();
        foreach ($days as $day) {
            ${"inicio$day"} = Carbon::parse($request->input($day . 'inicio'));
            ${"fin$day"} = Carbon::parse($request->input($day . 'final'));

            if (${"inicio$day"} > ${"fin$day"}) {
               
                return back()->with('danger', 'La hora de inicio no puede ser mayor a la hora de salida'); 
            }
            if (is_null($request->get($day . '_alm_inicio'))) {
                ${"almuerzo2$day"} = null;
            } 
            if (is_null($request->get($day . 'descanso1'))) {
                ${"descanso2$day"} = null;
            } else {
                ${"almuerzo1$day"} = Carbon::parse($request->input("{$day}_alm_inicio"));
                ${"descanso$day"}= Carbon::parse($request->input($day . 'descanso1'));
                ${"almuerzo2$day"} = ${"almuerzo1$day"}->copy()->addHour();
                ${"descanso2$day"} = ${"descanso$day"}->copy()->addMinutes(20);
                
                ${"horas$day"} = ${"fin$day"}->diffInHours(${"inicio$day"});
                ${"almuerzo$day"} = ${"almuerzo2$day"}->diffInHours(${"almuerzo1$day"});
                ${"total$day"} = ${"horas$day"} - ${"almuerzo$day"};



                $total += ${"total$day"};

                 $mallas->{$day . '_alm_final'} = ${"almuerzo2$day"};
                 $mallas->{$day . 'descanso2'} = ${"descanso2$day"};
            }
        }
        try{
                 $mallas ->users_id= $request->get('users_id');
                 $mallas ->semana= $request->get('semana');
                 $mallas ->campaña=$request->get('campaña');
                 $mallas ->foco=$request->get('foco');
                 $mallas ->encargado=$request->get('encargado');
                 $mallas ->lunesinicio= $request->get('lunesinicio');
                 $mallas ->lunesfinal= $request->get('lunesfinal');
                 $mallas ->lunesdescanso1= $request->get('lunesdescanso1');
                 $mallas ->lunes_alm_inicio= $request->get('lunes_alm_inicio');
                 //$mallas ->lun_alm_final= $request->get('lunes_alm_final');
                 //$mallas ->lunesdescanso2= $request->get('lunesdescanso2');

         // MARTES //         

                 $mallas ->martesinicio= $request->get('martesinicio');
                 $mallas ->martesfinal= $request->get('martesfinal');
                 $mallas ->martesdescanso1= $request->get('martesdescanso1');
                 $mallas ->martes_alm_inicio= $request->get('martes_alm_inicio');
                 //$mallas ->mar_alm_final= $request->get('martes_alm_final');
                 //$mallas ->martesdescanso2= $request->get('martesdescanso2');


        // MIERCOLES //

                 $mallas ->miercolesinicio= $request->get('miercolesinicio');
                 $mallas ->miercolesfinal= $request->get('miercolesfinal');
                 $mallas ->miercolesdescanso1= $request->get('miercolesdescanso1');
                 $mallas ->miercoles_alm_inicio= $request->get('miercoles_alm_inicio');
                // $mallas ->mie_alm_final= $request->get('miercoles_alm_final');
                 // $mallas ->miercolesdescanso2= $request->get('miercolesdescanso2');
        
        // JUEVES //

                 $mallas ->juevesinicio= $request->get('juevesinicio');
                 $mallas ->juevesfinal= $request->get('juevesfinal');
                 $mallas ->juevesdescanso1= $request->get('juevesdescanso1');
                 $mallas ->jueves_alm_inicio= $request->get('jueves_alm_inicio');
                 //$mallas ->jue_alm_final= $request->get('jueves_alm_final');
                 //$mallas ->juevesdescanso2= $request->get('juevesdescanso2');        

        // VIERNES //

                 $mallas ->viernesinicio= $request->get('viernesinicio');
                 $mallas ->viernesfinal= $request->get('viernesfinal');
                 $mallas ->viernesdescanso1= $request->get('viernesdescanso1');
                 $mallas ->viernes_alm_inicio= $request->get('viernes_alm_inicio');
                 //$mallas ->vie_alm_final= $request->get('viernes_alm_final');
                 //$mallas ->viernesdescanso2= $request->get('viernesdescanso2');

        // SABADO // 

                  $mallas ->sabadoinicio= $request->get('sabadoinicio');
                  $mallas ->sabadofinal= $request->get('sabadofinal');
                  $mallas ->sabadodescanso1= $request->get('sabadodescanso1');
                  $mallas ->sabado_alm_inicio= $request->get('sabado_alm_inicio');
                  //$mallas ->sab_alm_final= $request->get('sabado_alm_final');
                  //$mallas ->sabadodescanso2= $request->get('sabadodescanso2');

        // DOMINGO //


                 $mallas ->domingoinicio= $request->get('domingoinicio');
                 $mallas ->domingofinal= $request->get('domingofinal');
                 $mallas ->domingodescanso1= $request->get('domingodescanso1');
                 $mallas ->domingo_alm_inicio= $request->get('domingo_alm_inicio');
    

       
     
     
     $mallas ->diadescanso= $request->get('diadescanso');
     $mallas ->observaciones = $request->get('observaciones');

     $mallas ->horastotal = $total;
    



    
        $mallas ->save();   
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                // Se ha producido una violación de integridad
                return redirect()->action([MallasController::class, 'index'])->with('warning', 'El usuario ya tiene una malla asignada');
            }        
        }    
        if ($total < 48) {
        return redirect()->action([MallasController::class, 'index'])->with('warning', 'Agregaste menos de 48 horas semanales al usuario');
        }elseif ($total > 48) {
        return redirect()->action([MallasController::class, 'index'])->with('danger', 'Agregaste más de 48 horas semanales al usuario');
        } else {
        return redirect()->action([MallasController::class, 'index'])->with('success', 'Agregaste exactamente 48 horas semanales al usuario');
    }
    }       
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

      $mallas = Malla::find($id);
        return view('horacorte.editmallas',compact('mallas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
       
        $days = ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
       $total= 0;
       
       $mallas = Malla::find($id);
       foreach ($days as $day) {
        ${"inicio$day"} = Carbon::parse($request->input($day . 'inicio'));
        ${"fin$day"} = Carbon::parse($request->input($day . 'final'));

        if (${"inicio$day"} > ${"fin$day"}) {
           
            return back()->with('danger', 'La hora de inicio no puede ser mayor a la hora de salida'); 
        }
        if (is_null($request->get($day . '_alm_inicio'))) {
            ${"almuerzo2$day"} = null;
        } 
        if (is_null($request->get($day . 'descanso1'))) {
            ${"descanso2$day"} = null;
        } else {
            ${"almuerzo1$day"} = Carbon::parse($request->input("{$day}_alm_inicio"));
            ${"descanso$day"}= Carbon::parse($request->input($day . 'descanso1'));
            ${"almuerzo2$day"} = ${"almuerzo1$day"}->copy()->addHour();
            ${"descanso2$day"} = ${"descanso$day"}->copy()->addMinutes(20);
            
            ${"horas$day"} = ${"fin$day"}->diffInHours(${"inicio$day"});
            ${"almuerzo$day"} = ${"almuerzo2$day"}->diffInHours(${"almuerzo1$day"});
            ${"total$day"} = ${"horas$day"} - ${"almuerzo$day"};



            $total += ${"total$day"};

             $mallas->{$day . '_alm_final'} = ${"almuerzo2$day"};
             $mallas->{$day . 'descanso2'} = ${"descanso2$day"};
        }


             
             $mallas ->semana= $request->get('semana');
             $mallas ->campaña=$request->get('campaña');
             $mallas ->foco=$request->get('foco');
             $mallas ->encargado=$request->get('encargado');
             $mallas ->lunesinicio= $request->get('lunesinicio');
             $mallas ->lunesfinal= $request->get('lunesfinal');
             $mallas ->lunesdescanso1= $request->get('lunesdescanso1');
             $mallas ->lunes_alm_inicio= $request->get('lunes_alm_inicio');
             //$mallas ->lun_alm_final= $request->get('lunes_alm_final');
             //$mallas ->lunesdescanso2= $request->get('lunesdescanso2');

     // MARTES //         

             $mallas ->martesinicio= $request->get('martesinicio');
             $mallas ->martesfinal= $request->get('martesfinal');
             $mallas ->martesdescanso1= $request->get('martesdescanso1');
             $mallas ->martes_alm_inicio= $request->get('martes_alm_inicio');
             //$mallas ->mar_alm_final= $request->get('martes_alm_final');
             //$mallas ->martesdescanso2= $request->get('martesdescanso2');


    // MIERCOLES //

             $mallas ->miercolesinicio= $request->get('miercolesinicio');
             $mallas ->miercolesfinal= $request->get('miercolesfinal');
             $mallas ->miercolesdescanso1= $request->get('miercolesdescanso1');
             $mallas ->miercoles_alm_inicio= $request->get('miercoles_alm_inicio');
            // $mallas ->mie_alm_final= $request->get('miercoles_alm_final');
             // $mallas ->miercolesdescanso2= $request->get('miercolesdescanso2');
    
    // JUEVES //

             $mallas ->juevesinicio= $request->get('juevesinicio');
             $mallas ->juevesfinal= $request->get('juevesfinal');
             $mallas ->juevesdescanso1= $request->get('juevesdescanso1');
             $mallas ->jueves_alm_inicio= $request->get('jueves_alm_inicio');
             //$mallas ->jue_alm_final= $request->get('jueves_alm_final');
             //$mallas ->juevesdescanso2= $request->get('juevesdescanso2');        

    // VIERNES //

             $mallas ->viernesinicio= $request->get('viernesinicio');
             $mallas ->viernesfinal= $request->get('viernesfinal');
             $mallas ->viernesdescanso1= $request->get('viernesdescanso1');
             $mallas ->viernes_alm_inicio= $request->get('viernes_alm_inicio');
             //$mallas ->vie_alm_final= $request->get('viernes_alm_final');
             //$mallas ->viernesdescanso2= $request->get('viernesdescanso2');

    // SABADO // 

              $mallas ->sabadoinicio= $request->get('sabadoinicio');
              $mallas ->sabadofinal= $request->get('sabadofinal');
              $mallas ->sabadodescanso1= $request->get('sabadodescanso1');
              $mallas ->sabado_alm_inicio= $request->get('sabado_alm_inicio');
              //$mallas ->sab_alm_final= $request->get('sabado_alm_final');
              //$mallas ->sabadodescanso2= $request->get('sabadodescanso2');

    // DOMINGO //


             $mallas ->domingoinicio= $request->get('domingoinicio');
             $mallas ->domingofinal= $request->get('domingofinal');
             $mallas ->domingodescanso1= $request->get('domingodescanso1');
             $mallas ->domingo_alm_inicio= $request->get('domingo_alm_inicio');


   
        }
 
        $mallas ->diadescanso= $request->get('diadescanso');
        $mallas ->observaciones = $request->get('observaciones');

        $mallas ->horastotal = $total;
        $mallas ->save();

        if($total < 48 ){
            return redirect()->action([MallasController::class, 'index'])->with('warning', 'Agregaste menos de 48 horas semanales al usuario');

        }
        if ($total > 48){
            return redirect()->action([MallasController::class, 'index'])->with('danger', 'Agregaste más 48 horas semanales al usuario');

        }
        else{
            return redirect()->action([MallasController::class, 'index'])->with('success', 'Agregaste 48 horas semanales al usuario');
        }
    
    }


       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Malla::destroy($id);
        return back()->with('success','Malla eliminada correctamente');
    }

    public function export(){
        
        return Excel::download(new MallaExport, 'malla.xlsx');
    }
}