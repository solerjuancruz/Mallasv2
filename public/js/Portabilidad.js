/*funcion calcular hora de trabajo total  */
function calcular(id1, id2, id3, id4, id5) {
    let a = parseFloat(document.getElementById(id1).value) || 0;
    let b = parseFloat(document.getElementById(id2).value) || 0;
    let c = parseFloat(document.getElementById(id3).value) || 0;
    let d = parseFloat(document.getElementById(id4).value) || 0;
    let total = (document.getElementById(id5).value =
        b - a - (d - c) + " " + "horas");
}

function totalhorastrb() {
    const textinp = document.getElementById("total-horas");
    let inp1 = parseFloat(document.getElementById("htrab").value);
    let inp2 = parseFloat(document.getElementById("htrabmar").value);
    let inp3 = parseFloat(document.getElementById("htrabmie").value);
    let inp4 = parseFloat(document.getElementById("htrabjue").value);
    let inp5 = parseFloat(document.getElementById("htrabvie").value);
    let inp6 = parseFloat(document.getElementById("htrabsab").value);
    let inp7 = parseFloat(document.getElementById("htrabdom").value);

    var suma = inp1 + inp2 + inp3 + inp4 + inp5 + inp6 + inp7;

    textinp.value = suma + " " + "horas";
}

/*  funcion automatización hora almuerzo*/
function totalalm($id1, $id2) {
    let hora1Input = document.getElementById($id1);
    let hora2Input = document.getElementById($id2);

    hora1Input.addEventListener("change", () => {
        // Obtener el valor de la hora 1
        let hora1Value = hora1Input.value;
        // Crear un objeto de fecha con la fecha actual
        let fechaActual = new Date();
        // Obtener las horas y minutos de la hora 1
        let [hora, minuto] = hora1Value.split(":");
        // Configurar la fecha actual con las horas y minutos de la hora 1
        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar una hora a la fecha actual
        fechaActual.setHours(fechaActual.getHours() + 1);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString().padStart(2, "0");
        const minuto2 = fechaActual.getMinutes().toString().padStart(2, "0");
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}
//automatización tiempo almuerzo dias sabados
function almsab() {
    let hora1Input = document.getElementById("alminiciosab");
    let hora2Input = document.getElementById("almfinsab");

    hora1Input.addEventListener("change", () => {
        let hora1Value = hora1Input.value;
        let fechaActual = new Date();
        let [hora, minuto] = hora1Value.split(":");

        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar 20 minutos a la fecha actual
        fechaActual.setMinutes(fechaActual.getMinutes() + 30);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString().padStart(2, "0");
        const minuto2 = fechaActual.getMinutes().toString().padStart(2, "0");
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}

/*  funcion automatización break*/
function totaldes($id1, $id2) {
    let hora1Input = document.getElementById($id1);
    let hora2Input = document.getElementById($id2);

    hora1Input.addEventListener("change", () => {
        let hora1Value = hora1Input.value;
        let fechaActual = new Date();
        let [hora, minuto] = hora1Value.split(":");

        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar 20 minutos a la fecha actual
        fechaActual.setMinutes(fechaActual.getMinutes() + 20);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString().padStart(2, "0");
        const minuto2 = fechaActual.getMinutes().toString().padStart(2, "0");
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}
/*funciion break sabados*/
function breaksab() {
    let hora1Input = document.getElementById("descinisab");
    let hora2Input = document.getElementById("descfinsab");

    hora1Input.addEventListener("change", () => {
        let hora1Value = hora1Input.value;
        let fechaActual = new Date();
        let [hora, minuto] = hora1Value.split(":");

        fechaActual.setHours(hora);
        fechaActual.setMinutes(minuto);
        // Sumar 20 minutos a la fecha actual
        fechaActual.setMinutes(fechaActual.getMinutes() + 15);
        // Obtener la hora y los minutos de la fecha actualizada
        const hora2 = fechaActual.getHours().toString().padStart(2, "0");
        const minuto2 = fechaActual.getMinutes().toString().padStart(2, "0");
        // Actualizar el valor del input de hora 2
        hora2Input.value = `${hora2}:${minuto2}`;
    });
}

/*funcion seleccion de dia descanso*/
function DiaDescanso() {
    const fechaInput = document.getElementById("diadescanso");
    const fechaSeleccionada = fechaInput.value;
    const fecha = new Date(fechaSeleccionada);
    const diaSemana = fecha.getDay();

    const elementos = [
        {
            dia: 0,
            inputs: [
                "horainicio",
                "horafin",
                "alminicio",
                "descinilun",
                "descfinlun",
                "almfin",
            ],
        },
        {
            dia: 1,
            inputs: [
                "horainiciomar",
                "horafinmar",
                "alminiciomar",
                "descinimar",
                "descfinmar",
                "almfinmar",
            ],
        },
        {
            dia: 2,
            inputs: [
                "horainiciomie",
                "horafinmie",
                "alminiciomie",
                "descinimie",
                "descfinmie",
                "almfinmie",
            ],
        },
        {
            dia: 3,
            inputs: [
                "horainiciojue",
                "horafinjue",
                "alminiciojue",
                "descinijue",
                "descfinjue",
                "almfinjue",
            ],
        },
        {
            dia: 4,
            inputs: [
                "horainiciovie",
                "horafinvie",
                "alminiciovie",
                "descinivie",
                "descfinvie",
                "almfinvie",
            ],
        },
        {
            dia: 5,
            inputs: [
                "horainiciosab",
                "horafinsab",
                "alminiciosab",
                "descinisab",
                "descfinsab",
                "almfinsab",
            ],
        },
        {
            dia: 6,
            inputs: [
                "horainiciodom",
                "horafindom",
                "alminiciodom",
                "descinidom",
                "descfindom",
                "almfindom",
            ],
        },
    ];

    const diaActual = elementos.find((elemento) => elemento.dia === diaSemana);

    if (diaActual) {
        diaActual.inputs.forEach((inputId) => {
            const input = document.getElementById(inputId);
            input.disabled = true;
            input.value = "";
        });
    }
}

/*funcion de reseteo inputs */

function Reset() {
    let restablecer = document.getElementById("diadescanso");
    let horaInputs = document.querySelectorAll(`input[id^="hora"]`);
    let alminiInputs = document.querySelectorAll(`input[id^="almini"]`);
    let descInputs = document.querySelectorAll(`input[id^="descini"]`);

    let inputs = [...horaInputs, ...alminiInputs, ...descInputs];
    inputs.forEach((input) => {
        input.disabled = false;
        restablecer.value = "";
    });
}

function semanaSiguiente() {
    var fechaActual = new Date();
    var fechaLimite = new Date(fechaActual);
    fechaLimite.setDate(fechaLimite.getDate() + 10);
    // Calcular la fecha de finalización de la semana actual
    var fechaFinSemanaActual = new Date(fechaActual);
    fechaFinSemanaActual.setDate(
        fechaFinSemanaActual.getDate() + (6 - fechaActual.getDay())
    );
    // Si la fecha actual es mayor o igual a la fecha de finalización de la semana actual,
    // actualizar la fecha límite a la siguiente semana
    if (fechaActual >= fechaFinSemanaActual) {
        fechaLimite.setDate(fechaLimite.getDate() + 7);
    }
    // Convertir las fechas en formato de cadena yyyy-mm-dd
    var fechaActualStr = fechaActual.toISOString().split("T")[0];
    var fechaLimiteStr = fechaLimite.toISOString().split("T")[0];
    var inputFecha = document.getElementById("diadescanso");
    // Establecer los atributos 'min' y 'max' del input de tipo date
    inputFecha.setAttribute("min", fechaActualStr);
    inputFecha.setAttribute("max", fechaLimiteStr);
}

function autocompletarinput() {
    const select = document.getElementById("horario");
    const selectedValue = select.value;

    const inputinicio = document.querySelectorAll('input[id^="horaini"]');
    const inputfin = document.querySelectorAll('input[id^="horafin"]');
    const inputsabado = document.getElementById("horafinsab");
    const inputsabadoini = document.getElementById("horainiciosab");
    const alminisab = document.getElementById("alminiciosab");
    const almfinsab = document.getElementById("almfinsab");
    const brkfinsab = document.getElementById("descfinsab");
    const inputalm = document.querySelectorAll('input[id^="almini"]');
    const inputalmfin = document.querySelectorAll('input[id^="almfin"]');
    const inputbreak = document.querySelectorAll('input[id^="descini"]');
    const inputbreakfin = document.querySelectorAll('input[id^="descfin"]');

    const opciones = {
        //L-V 8am-5pm /S 8am-4pm
        opcion1: {
            inicio: "08:00:00",
            fin: "17:00:00",
            almuerzo: "13:00:00",
            almuerzoFin: "14:00:00",
            descanso: "10:00:00",
            descansoFin: "10:20:00",
            sabadoIni: "08:00:00",
            sabadoFin: "16:00:00",
            descansoSab: "10:15:00",
        },
        // L-V 8am-6pm /S 8am-11pm
        opcion2: {
            inicio: "08:00:00",
            fin: "18:00:00",
            almuerzo: "13:00:00",
            almuerzoFin: "14:00:00",
            descanso: "10:00:00",
            descansoFin: "10:20:00",
            alminisab: "",
            almfinsab: "",
            sabadoIni: "08:00:00",
            sabadoFin: "11:00:00",
            descansoSab: "10:15:00",
        },
        //L-V 9am-6pm /S 8am-4pm
        opcion3: {
            inicio: "09:00:00",
            fin: "18:00:00",
            almuerzo: "13:00:00",
            almuerzoFin: "14:00:00",
            descanso: "10:00:00",
            descansoFin: "10:20:00",
            sabadoIni: "08:00:00",
            sabadoFin: "16:00:00",
            descansoSab: "10:15:00",
        },
        // L-V 8am-5:30pm /S 8am-1pm
        opcion4: {
            inicio: "08:00:00",
            fin: "17:30:00",
            almuerzo: "13:00:00",
            almuerzoFin: "14:00:00",
            descanso: "10:00:00",
            descansoFin: "10:20:00",
            alminisab: "",
            almfinsab: "",
            sabadoIni: "08:00:00",
            sabadoFin: "13:00:00",
            descansoSab: "10:15:00",
        },
        //L-V 7am-4pm /S 8am-4pm
        opcion5: {
            inicio: "07:00:00",
            fin: "16:00:00",
            almuerzo: "13:00:00",
            almuerzoFin: "14:00:00",
            descanso: "10:00:00",
            descansoFin: "10:20:00",
            sabadoIni: "08:00:00",
            sabadoFin: "16:00:00",
            descansoSab: "10:15:00",
        },
        //reset
        opcion6: {
            inicio: "",
            fin: "",
            almuerzo: "",
            almuerzoFin: "",
            descanso: "",
            descansoFin: "",
            sabadoIni: "",
            sabadoFin: "",
            descansoSab: "",
        },
    };

    inputinicio.forEach(
        (input) => (input.value = opciones[selectedValue].inicio)
    );
    inputfin.forEach((input) => (input.value = opciones[selectedValue].fin));
    inputsabado.value = opciones[selectedValue].sabadoFin;
    inputsabadoini.value = opciones[selectedValue].sabadoIni;

    inputalm.forEach(
        (input) => (input.value = opciones[selectedValue].almuerzo)
    );
    inputalmfin.forEach(
        (input) => (input.value = opciones[selectedValue].almuerzoFin)
    );
    inputbreak.forEach(
        (input) => (input.value = opciones[selectedValue].descanso)
    );
    inputbreakfin.forEach(
        (input) => (input.value = opciones[selectedValue].descansoFin)
    );
    //inputs almuerzo sabados
    if (inputsabado.value <= "13:00:00") {
        alminisab.value = opciones[selectedValue].alminisab;
        almfinsab.value = opciones[selectedValue].almfinsab;
    }
    // input descanso sabado
    brkfinsab.value = opciones[selectedValue].descansoSab;
}

/*sweetalert aviso eliminar */
/* $(".formulario-edit").submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
        }
    });
    this.submit();
});
 */
/* document.addEventListener('DOMContentLoaded', function() {
    // Aquí va el código para crear la tabla
// Obtener el contenedor de la tabla
var table = document.getElementById('myTable');

// Crear el encabezado de los días de la semana
var datos = ['Ingreso', 'Salida', 'Alm ini', 'Alm fin', 'Break ini', 'Break fin'];

var thead = document.createElement('thead');
var trHead = document.createElement('tr');

for (var i = 0; i < 7; i++) {
  var th = document.createElement('th');
  th.textContent = datos[i];
  trHead.appendChild(th);
}

thead.appendChild(trHead);
table.appendChild(thead);

// Crear las filas con los inputs
var tbody = document.createElement('tbody');

for (var i = 0; i < 1; i++) {
  var tr = document.createElement('tr');
  
  for (var j = 0; j < 6; j++) {
    var td = document.createElement('td');
    
    for (var k = 0; k < 6; k++) {
      var input = document.createElement('input');
      input.type = 'time';
      td.appendChild(input);
    }
    
    tr.appendChild(td);
  }
  
  tbody.appendChild(tr);
}

table.appendChild(tbody);




  });*/
