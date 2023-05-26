  /*funcion calcular hora de trabajo total  */
  function calcular(id1, id2, id3, id4, id5) {


    let a = parseFloat(document.getElementById(id1).value) || 0;
    let b = parseFloat(document.getElementById(id2).value) || 0;
    let c = parseFloat(document.getElementById(id3).value) || 0;
    let d = parseFloat(document.getElementById(id4).value) || 0;
    let total = document.getElementById(id5).value = (b - a) - (
        d - c) + "-horas";
}
/*  funcion automatización hora almuerzo*/
function totalalm($id1, $id2) {
    let hora1Input = document.getElementById($id1);
    let hora2Input = document.getElementById($id2);

    hora1Input.addEventListener('change', () => {
        // Obtener el valor de la hora 1
        let hora1Value = hora1Input.value;
        // Crear un objeto de fecha con la fecha actual
        let fechaActual = new Date();
        // Obtener las horas y minutos de la hora 1
        let [hora, minuto] = hora1Value.split(':');
        // Configurar la fecha actual con las horas y minutos de la hora 1
        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar una hora a la fecha actual
        fechaActual.setHours(fechaActual.getHours() + 1);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString()
            .padStart(2,
                '0');
        const minuto2 = fechaActual.getMinutes().toString()
            .padStart(2, '0');
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}
/*  funcion automatización break*/
function totaldes($id1, $id2) {
    let hora1Input = document.getElementById($id1);
    let hora2Input = document.getElementById($id2);

    hora1Input.addEventListener('change', () => {

        let hora1Value = hora1Input.value;
        let fechaActual = new Date();
        let [hora, minuto] = hora1Value.split(':');

        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar 20 minutos a la fecha actual
        fechaActual.setMinutes(fechaActual.getMinutes() + 20);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString()
            .padStart(2, '0');
        const minuto2 = fechaActual.getMinutes().toString()
            .padStart(2, '0');
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}

/*funcion seleccion de dia descanso*/
function DiaDescanso() {
    const fechaInput = document.getElementById('diadescanso');
    let lun1Input = document.getElementById('horainicio');
    let lun2Input = document.getElementById('horafin');
    let lun3Input = document.getElementById('alminicio');
    let lun4Input = document.getElementById('descinilun');
    let lun5Imput = document.getElementById('descfinlun');
    let lun6Imput = document.getElementById('almfin');

    let mar1Input = document.getElementById('horainiciomar');
    let mar2Input = document.getElementById('horafinmar');
    let mar3Input = document.getElementById('alminiciomar');
    let mar4Input = document.getElementById('descinimar');
    let mar5Imput = document.getElementById('descfinmar');
    let mar6Imput = document.getElementById('almfinmar');

    let mie1Input = document.getElementById('horainiciomie');
    let mie2Input = document.getElementById('horafinmie');
    let mie3Input = document.getElementById('alminiciomie');
    let mie4Input = document.getElementById('descinimie');
    let mie5Imput = document.getElementById('descfinmie');
    let mie6Imput = document.getElementById('almfinmie');

    let jue1Input = document.getElementById('horainiciojue');
    let jue2Input = document.getElementById('horafinjue');
    let jue3Input = document.getElementById('alminiciojue');
    let jue4Input = document.getElementById('descinijue');
    let jue5Imput = document.getElementById('descfinjue');
    let jue6Imput = document.getElementById('almfinjue');

    let vie1Input = document.getElementById('horainiciovie');
    let vie2Input = document.getElementById('horafinvie');
    let vie3Input = document.getElementById('alminiciovie');
    let vie4Input = document.getElementById('descinivie');
    let vie5Imput = document.getElementById('descfinvie');
    let vie6Imput = document.getElementById('almfinvie');

    let sab1Input = document.getElementById('horainiciosab');
    let sab2Input = document.getElementById('horafinsab');
    let sab3Input = document.getElementById('alminiciosab');
    let sab4Input = document.getElementById('descinisab');
    let sab5Imput = document.getElementById('descfinsab');
    let sab6Imput = document.getElementById('almfinsab');

    let dom1Input = document.getElementById('horainiciodom');
    let dom2Input = document.getElementById('horafindom');
    let dom3Input = document.getElementById('alminiciodom');
    let dom4Input = document.getElementById('descinidom');
    let dom5Input = document.getElementById('descfindom');
    let dom6Input = document.getElementById('almfindom');
    //
    const fechaSeleccionada = fechaInput.value;
    const fecha = new Date(fechaSeleccionada);
    let diaSemana = fecha.getDay();

    switch (diaSemana) {

        case 6: // Domingo
            dom1Input.disabled = true;
            dom2Input.disabled = true;
            dom3Input.disabled = true;
            dom4Input.disabled = true;
            dom1Input.value = "";
            dom2Input.value = "";
            dom3Input.value = "";
            dom4Input.value = "";
            dom5Input.value = "";
            dom6Input.value = "";
            break;
        case 0: // Lunes
            lun1Input.disabled = true;
            lun2Input.disabled = true;
            lun3Input.disabled = true;
            lun4Input.disabled = true;
            lun1Input.value = "";
            lun2Input.value = "";
            lun3Input.value = "";
            lun4Input.value = "";
            lun5Imput.value = "";
            lun6Imput.value = "";

            break;
        case 1: // Martes
            mar1Input.disabled = true;
            mar2Input.disabled = true;
            mar3Input.disabled = true;
            mar4Input.disabled = true;
            mar1Input.value = "";
            mar2Input.value = "";
            mar3Input.value = "";
            mar4Input.value = "";
            mar5Imput.value = "";
            mar6Imput.value = "";
            break;
        case 2: // Miercoles
            mie1Input.disabled = true;
            mie2Input.disabled = true;
            mie3Input.disabled = true;
            mie4Input.disabled = true;
            mie1Input.value = "";
            mie2Input.value = "";
            mie3Input.value = "";
            mie4Input.value = "";
            mie5Imput.value = "";
            mie6Imput.value = "";
            break;
        case 3: // Jueves
            jue1Input.disabled = true;
            jue2Input.disabled = true;
            jue3Input.disabled = true;
            jue4Input.disabled = true;
            jue1Input.value = "";
            jue2Input.value = "";
            jue3Input.value = "";
            jue4Input.value = "";
            jue5Imput.value = "";
            jue6Imput.value = "";
            break;
        case 4: // viernes
            vie1Input.disabled = true;
            vie2Input.disabled = true;
            vie3Input.disabled = true;
            vie4Input.disabled = true;
            vie1Input.value = "";
            vie2Input.value = "";
            vie3Input.value = "";
            vie4Input.value = "";
            vie5Imput.value = "";
            vie6Imput.value = "";
            break;
        case 5: // sabado

            sab1Input.disabled = true;
            sab2Input.disabled = true;
            sab3Input.disabled = true;
            sab4Input.disabled = true;
            sab1Input.value = "";
            sab2Input.value = "";
            sab3Input.value = "";
            sab4Input.value = "";
            sab5Imput.value = "";
            sab6Imput.value = "";
            break;
    }
}
/*funcion de reseteo inputs */
function Reset() {
    let ids = ["horainicio", "horafin", "descinilun", "alminicio",
        "horainiciomar", "horafinmar", "alminiciomar",
        "descinimar", "horainiciomie", "horafinmie", "alminiciomie",
        "descinimie", "horainiciojue", "horafinjue", "alminiciojue",
        "descinijue", "horainiciovie", "horafinvie", "alminiciovie",
        "descinivie", "horainiciosab", "horafinsab", "alminiciosab",
        "descinisab", "horainiciodom", "horafindom", "alminiciodom",
        "descinidom",
    ]
    for (i = 0; i < ids.length; i++) {
        let input = document.getElementById(ids[i]);
        input.disabled = false;
    }
}

function semanaSiguiente() {

    var fechaActual = new Date();
    var fechaLimite = new Date(fechaActual);
    fechaLimite.setDate(fechaLimite.getDate() + 10);
    // Calcular la fecha de finalización de la semana actual
    var fechaFinSemanaActual = new Date(fechaActual);
    fechaFinSemanaActual.setDate(fechaFinSemanaActual.getDate() + (6 -
        fechaActual.getDay()));
    // Si la fecha actual es mayor o igual a la fecha de finalización de la semana actual,
    // actualizar la fecha límite a la siguiente semana
    if (fechaActual >= fechaFinSemanaActual) {
        fechaLimite.setDate(fechaLimite.getDate() + 7);
    }
    // Convertir las fechas en formato de cadena yyyy-mm-dd
    var fechaActualStr = fechaActual.toISOString().split('T')[0];
    var fechaLimiteStr = fechaLimite.toISOString().split('T')[0];
    var inputFecha = document.getElementById('diadescanso');
    // Establecer los atributos 'min' y 'max' del input de tipo date
    inputFecha.setAttribute('min', fechaActualStr);
    inputFecha.setAttribute('max', fechaLimiteStr);

}

function autocompletarinput() {
    const select = document.getElementById("horario");
    const selectedValue = select.value;
    const valor1 = "08:00:00"; //horainicio
    const valor2 = "17:00:00"; //horafin
    const valor3 = "13:00:00"; //alm
    const valor4 = "14:00:00"; //almfin
    const valor5 = "10:00:00"; //break
    const valor6 = "11:00:00"; //breakfin
    const valor7 = "16:00:00"; // sabado
    //valores 7am-6 pm
    const valor8 = "07:00:00"; //horainicio
    const valor9 = "18:00:00"; //horafin
    //L-V 8am-6pm Sab 8am-11pm staff
    //L-V 9am-6pm Sab 8am-4pm
    //8am-5:30pm Sab 8am-1 pm
    //L-V 7am-4pm Sab 8am-4pm

    let inputinicio = document.querySelectorAll(
        'input[id^="horaini"]');
    let inputfin = document.querySelectorAll(
        'input[id^="horafin"]');
    let inputsabado = document.getElementById('horafinsab');
    let inputsabadoini= document.getElementById('horainiciosab');
    let inputalm = document.querySelectorAll('input[id^="almini"]');
    let inputalmfin = document.querySelectorAll(
        'input[id^="almfin"]');
    let inputbreak = document.querySelectorAll(
        'input[id^="descini"]');
    let inputbreakfin = document.querySelectorAll(
        'input[id^="descfin"]');
    // const inputs = [inputinicio,inputfin,inputalm,inputabreak]

    if (selectedValue === "opcion1") {
        //horario 8am-5pm S 8am-4pm
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value = "08:00:00";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value = "17:00:00";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "13:00:00";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "14:00:00";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "10:00:00";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "10:20:00";
        }
        inputsabado.value = "16:00:00";
    } else if (selectedValue === "opcion2") {
       // L-V 8am-6pm /S 8am-11pm
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value ="08:00:00";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value ="18:00:00";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "13:00:00";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "14:00:00";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "10:00:00";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "10:20:00";
        }
        inputsabado.value = "11:00:00";
    
    } else if (selectedValue === "opcion3") {
        // L-V 9am-6pm /S 8am-4pm
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value = "09:00:00";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value = "18:00:00";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "13:00:00";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "14:00:00";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "10:00:00";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "10:20:00";
        }
        inputsabadoini.value = "08:00:00";
        inputsabado.value = "16:00:00";
    } else if (selectedValue === "opcion4") {
       // L-V 8am-5:30pm /S 8am-1pm
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value = "08:00:00";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value = "17:30:00";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "13:00:00";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "14:00:00";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "10:00:00";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "10:20:00";
        }
        inputsabado.value = "13:00:00";
    } else if (selectedValue === "opcion5") {
        //8am - 5:30pm S 8am - 1 pm
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value = "07:00:00";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value = "16:00:00";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "13:00:00";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "14:00:00";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "10:00:00";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "10:20:00";
        }
        inputsabadoini.value = "08:00:00";
        inputsabado.value = "16:00:00";
    } else if (selectedValue === "reset") {
        for (let i = 0; i < inputinicio.length; i++) {
            inputinicio[i].value = "";
        }
        for (let i = 0; i < inputfin.length; i++) {
            inputfin[i].value = "";
        }
        for (let i = 0; i < inputalm.length; i++) {
            inputalm[i].value = "";
        }
        for (let i = 0; i < inputalmfin.length; i++) {
            inputalmfin[i].value = "";
        }
        for (let i = 0; i < inputbreak.length; i++) {
            inputbreak[i].value = "";
        }
        for (let i = 0; i < inputbreakfin.length; i++) {
            inputbreakfin[i].value = "";
        }
    }
}