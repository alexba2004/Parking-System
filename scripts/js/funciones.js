function msjErrorUser(){
    alert("Error de usuario");
}
function msjErrorPass(){
    alert("Error de contraseña");
}
function msjGuardar(){
    alert("Datos guardados");
}
function cargarDiv(div,url){
    $(div).load(url);
}

function registrarCliente(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var numero=$("#numero").val();
    var direccion=$("#direccion").val();
    $.post("registrarCliente.php",{"nombre":nombre,"direccion":direccion,"numero":numero,"correo":correo}, function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#numero").val("");
        $("#correo").val("");
        cargarDiv("#contenido",'cliente.php');
    });

}

function registrarVehiculo(){
    var matricula=$("#matricula").val();
    var modelo=$("#modelo").val();
    var color=$("#color").val();
    var puertas=$("#puertas").val();
    var tipo=$("#tipo").val();
    var id_cliente=$("#id_cliente").val();

    $.post("registrarVehiculo.php",{"matricula":matricula,"modelo":modelo,"color":color,"puertas":puertas,"tipo":tipo,"id_cliente":id_cliente}, function(respuesta){
        alert(respuesta);
        $("#matricula").val("");
        $("#modelo").val("");
        $("#color").val("");
        $("#puertas").val("");
        $("#tipo").val("");
        $("#id_cliente").val("");
        cargarDiv($("#result"), 'vehiculo.php')
        
    });

}

function registrarEmpleado(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var numero=$("#numero").val();
    var direccion=$("#direccion").val();
    var usuario=$("#usuario").val();
    var contrasena=$("#contrasena").val();
    $.post("registrarEmpleado.php",{"nombre":nombre,"direccion":direccion,"numero":numero,"correo":correo,"usuario":usuario,"contrasena":contrasena}, function(respuesta){
        alert(respuesta);
        $("#nombre").val("");
        $("#direccion").val("");
        $("#numero").val("");
        $("#correo").val("");
        $("#usuario").val("");
        $("#contrasena").val("");
        cargarDiv($("#result"), 'empleados.php')
    });

}
function registrarCajon(){
    var numero=$("#numero").val();
    var estatus=$("#estatus").val();
   
    $.post("registrarCajon.php",{"numero":numero,"estatus":estatus}, function(respuesta){
        alert(respuesta);
        $("#numero").val("");
        $("#estatus").val("");
        cargarDiv($("#result"), '../../cajon.php');
    });

}

function registrarTarifa(){
    var tarifa=$("#tarifa").val();
    var monto=$("#monto").val();
   
    $.post("registrarTarifa.php",{"tarifa":tarifa,"monto":monto}, function(respuesta){
        alert(respuesta);
        $("#tarifa").val("");
        $("#monto").val("");
        cargarDiv($("#result"), 'tarifas.php')
    });

}

function eliminarCajon(idcajon){
    $.post("eliminarCajon.php",{
        "id_cajon":idcajon
    },
        function(result){
            alert(result);
            cargarDiv($("#result"), 'cajon.php')
        }
    );
}

function eliminarCliente(idcliente){
    $.post("eliminarCliente.php",{
        "id_cliente":idcliente
    },
        function(result){
            alert(result);
            cargarDiv("#contenido",'cliente.php');
        },
        
    );
    
}

function eliminarVehiculo(idvehiculo){
    $.post("eliminarVehiculo.php",{
        "id_vehiculo":idvehiculo
    },
        function(result){
            alert(result);
        }
    );
}

function eliminarEmpleado(idempleado){
    $.post("eliminarEmpleado.php",{
        "id_empleado":idempleado
    },
        function(result){
            alert(result);
        }
    );
}
function eliminarTarifa(idtarifa){
    $.post("eliminarTarifa.php",{
        "id_tarifa":idtarifa
    },
        function(result){
            alert(result);
        }
    );
}
function cancelarOperacion() {

    window.location = "menu.php";

}

function editarCliente(idcliente){
  
    $.post('actualizarCliente.php', {
        "id_cliente": idcliente
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarCliente(id_cliente) {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    // alert(id_cliente);

    $.post("modificarCliente.php", {
        "id_cliente": id_cliente,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
           cargarDiv("#contenido", 'cliente.php')
        }
        else {
            alert("Error al modificar");
        }
       
    });
}

function editarCliente(idcliente){
  
    $.post('actualizarCliente.php', {
        "id_cliente": idcliente
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarCliente(id_cliente) {
    var nombre = $("#nombre").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#correo").val();
    // alert(id_cliente);

    $.post("modificarCliente.php", {
        "id_cliente": id_cliente,
        "nombre": nombre,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
           cargarDiv("#contenido", 'cliente.php');
        }
        else {
            alert("Error al modificar");
        }
        
    });
    
}

function editarVehiculo(idvehiculo){
  
    $.post('actualizar.php', {
        "id_vehiculo": idvehiculo
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarVehiculo(id_vehiculo) {
    var matricula = $("#matricula").val();
    var modelo = $("#modelo").val();
    var color = $("#color").val();
    var puertas = $("#puertas").val();
    var tipo = $("#tipo").val();
    var id_cliente = $("#id_cliente").val();


    // alert(id_cliente);

    $.post("modificarVehiculo.php", {
        "id_cliente": id_cliente,
        "matricula": matricula,
        "direccion": direccion,
        "telefono": telefono,
        "correo": correo
    }, function (result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
        }
        else {
            alert("Error al modificar");
        }
        cargarDiv("#contenido", 'cliente.php')
    });
}


function registrarServo(){
    var descripcion=$("#descripcion").val();
    var grados=$("#grados").val();
    var status=$("#status").val();

   
    $.post("registrarServo.php",{"descripcion":descripcion,"grados":grados,"status":status}, function(respuesta){
        alert(respuesta);
        $("#descripcion").val("");
        $("#grados").val("");
        $("#status").val("");
        cargarDiv("#contenido","servo.php");
    });

}
function eliminarServo(idservo){
    $.post("eliminarServo.php",{
        "id_servo":idservo
    },
        function(result){
            alert(result);
            cargarDiv("#contenido",'servo.php');
        },
        
    );
    
}
function editarServo(idservo){
  
    $.post('actualizarServo.php', {
        "id_servo": idservo
    }, function (respuesta) {
        contenido.innerHTML = respuesta
    })
}

function modificarServo(id_servo) {
    var descripcion = $("#descripcion").val();
    var grados = $("#grados").val();
    var status = $("#status").val();


    $.post("modificarServo.php", {
        "id_servo": id_servo,
        "descripcion": descripcion,
        "grados": grados,
        "status": status,
    
    }, function(result) {
        if (result.trim() === "success") {
           alert('Actualizado correctamente');
           cargarDiv("#contenido", '../../servo.php');
        }
        else {
            alert("Error al modificar");
        }
        
    });
    
}

function abrirModal(idcajon){
    $("modalPromociones").modal("show");
    $("#id_cajon").val(idcajon);
}

function cerrarModal(){
    $("#modalPromociones").modal('hide');
}

