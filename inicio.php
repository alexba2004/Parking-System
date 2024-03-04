<h1 style="color: white">Dashboard</h1>

<?php
include 'conexion.php';
$query = "SELECT * FROM cajon ORDER BY numero";
$ejecutar =  $conexion->query($query);
echo "<div class='row'>";
while($result=$ejecutar->fetch_array()){
    echo "<div class='col-sm-3' style='margin-top: 15px;'>
    <div class='card' style='width:18rem;'>
        <img src='imagenes/automovil.png' class='card-img-top' alt'imagen'>
            <div class='card-body'>
                <h5 class='card-title'> Cajon ".$result['numero']."</h5>";
    if($result['estatus']==1){
        $query2 = "SELECT * FROM registro INNER JOIN vehículo ON 
        vehículo.id_vehiculo = registro.id_vehiculo INNER JOIN cajon ON 
        cajon.id_cajon = registro.id_cajon INNER JOIN tarifa ON 
        tarifa.id_tarifa = registro.id_tarifa INNER JOIN empleados ON
         empleados.id_empleado = registro.id_empleado WHERE registro.id_cajon = ".$result['id_cajon']." AND fecha_salida  IS NULL AND hora_salida IS NULL";
         $ejecutar2 = $conexion->query($query2);
         while($result2 = $ejecutar2->fetch_array()){
            echo "<h4>Matricula:".$result2['matricula']."</h4>";
            echo "<p>".$result2['fecha_ingreso']." ".$result2['hora_ingreso']."</p>";
            echo "<p>".$result2['tarifa']."</p>";
            echo "<p>".$result2['nombre']."</p>";
            echo "<a href='#' class='btn btn-warning' onclick='actualizarRegistroSalida(".$result2['id_registro'].")'>Salida</a>";
            echo "<img src='imagenes/prohibido.png' style='height:50px; margin-left: 5px;'>";
            
         }
    }
    else{
        echo "<p class='card-text'>No existe un vehiculo ocupando este cajon</p>";
        
        echo "<a href='#' class='btn btn-info' data-toggle='modal' data-target='#myModal' onclick='abrirModal(".$result['id_cajon'].")' >Ocupar</a>";
        if($result["ocupado"]==false){
          echo "<img src='imagenes/comprobado.png' style='height:50px; margin-left: 5px;'>";
        }

    }
echo "</div></div></div>" ;
}
?>


<div class="modal" id="modalPromociones">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar uso de estacionamiento</h4>
        <button type="button" class="close" data-dismiss="mmodal" onclick="cerrarModal();">❌</button>
      </div>
      <div class="modal-body">
        <!-- <form> -->
        <form action="" method="post"> <!-- FORM-->

<div class="row">
    <div class="col-lg-12">
        <label for="id_vehiculo" class="form-label" required>Vehiculo:</label>
        <select class="form-control" name="id_vehiculo" id="id_vehiculo">
            <option value="" select>- SELECCIONA -</option>
            <?php
            include 'conexion.php';
                $query = "SELECT id_vehiculo, matricula FROM vehículo";
                $ejecutar = $conexion->query($query);
                while($resultado = $ejecutar->fetch_array()){
                    echo "<option value='".$resultado['id_vehiculo']."'>".$resultado['matricula']."</option>";
                }
            ?>
        </select>
    </div>
    <div class="col-lg-12">
        <label for="id_cajon" class="form-label" required>Cajon :</label>
        <input type="text" id="id_cajon" class="form-control" disabled>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <label for="id_tarifa" class="form-label" required>Tarifa:</label>
        <select class="form-control" name="id_tarifa" id="id_tarifa" >
            <option value="" select>- SELECCIONA -</option>
            <?php
            include 'conexion.php';
                $query = "SELECT id_tarifa, tarifa FROM tarifa";
                $ejecutar = $conexion->query($query);
                while($resultado = $ejecutar->fetch_array()){
                    echo "<option value='".$resultado['id_tarifa']."'>".$resultado['tarifa']."</option>";
                }
            ?>
        </select>
    </div>

</div>
<br>

<div class="row ">
    <div class="col-lg-6 ">
        <input class="btn btn-primary mb-2" onclick="registrarRegistro();" type="button" value="Guardar"></input>
    </div>
</div>
</div>
</form> 
        <!-- </form> -->
      </div>
    </div>
  </div>
</div>