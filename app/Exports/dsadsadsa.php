// MARTES //         

$mallas->martesfecha = $fechasemana[1];
$mallas->martesinicio = $request->get('martesinicio');
$mallas->martesfinal = $request->get('martesfinal');
$mallas->martesdescanso1 = $request->get('martesdescanso1');
$mallas->martes_alm_inicio = $request->get('martes_alm_inicio');
//$mallas ->mar_alm_final= $request->get('martes_alm_final');
//$mallas ->martesdescanso2= $request->get('martesdescanso2');


// MIERCOLES //

$mallas->miercolesfecha = $fechasemana[2];
$mallas->miercolesinicio = $request->get('miercolesinicio');
$mallas->miercolesfinal = $request->get('miercolesfinal');
$mallas->miercolesdescanso1 = $request->get('miercolesdescanso1');
$mallas->miercoles_alm_inicio = $request->get('miercoles_alm_inicio');
// $mallas ->mie_alm_final= $request->get('miercoles_alm_final');
// $mallas ->miercolesdescanso2= $request->get('miercolesdescanso2');

// JUEVES //

$mallas->juevesfecha = $fechasemana[3];
$mallas->juevesinicio = $request->get('juevesinicio');
$mallas->juevesfinal = $request->get('juevesfinal');
$mallas->juevesdescanso1 = $request->get('juevesdescanso1');
$mallas->jueves_alm_inicio = $request->get('jueves_alm_inicio');
//$mallas ->jue_alm_final= $request->get('jueves_alm_final');
//$mallas ->juevesdescanso2= $request->get('juevesdescanso2');        

// VIERNES //

$mallas->viernesfecha = $fechasemana[4];
$mallas->viernesinicio = $request->get('viernesinicio');
$mallas->viernesfinal = $request->get('viernesfinal');
$mallas->viernesdescanso1 = $request->get('viernesdescanso1');
$mallas->viernes_alm_inicio = $request->get('viernes_alm_inicio');
//$mallas ->vie_alm_final= $request->get('viernes_alm_final');
//$mallas ->viernesdescanso2= $request->get('viernesdescanso2');

// SABADO // 

$mallas->sabadofecha = $fechasemana[5];
$mallas->sabadoinicio = $request->get('sabadoinicio');
$mallas->sabadofinal = $request->get('sabadofinal');
$mallas->sabadodescanso1 = $request->get('sabadodescanso1');
$mallas->sabado_alm_inicio = $request->get('sabado_alm_inicio');
//$mallas ->sab_alm_final= $request->get('sabado_alm_final');
//$mallas ->sabadodescanso2= $request->get('sabadodescanso2');

// DOMINGO //

$mallas->domingofecha = $fechasemana[6];
$mallas->domingoinicio = $request->get('domingoinicio');
$mallas->domingofinal = $request->get('domingofinal');
$mallas->domingodescanso1 = $request->get('domingodescanso1');
$mallas->domingo_alm_inicio = $request->get('domingo_alm_inicio');





$mallas->diadescanso = $request->get('diadescanso');
$mallas->observaciones = $request->get('observaciones');