<?php
 include 'conexion.php';
$id_servo= $_POST['id_servo'];
$query = "SELECT * FROM servo WHERE id_servo='".$id_servo."'";
$ejecutar = $conexion->query($query);
while($result=$ejecutar->fetch_array()){
?>

<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
            <h3>Servo No.<b><?php echo $result['id_servo']?></b></h3>
<hr>
                <form id="frmClientes" name="frmClientes" method="POST"> <!-- FORM-->
                    <div class="row">
                        <div class="col">
                            <label for="descripcion" class="form-label" required>Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripcion" value="<?php
                            echo $result['descripcion'];
                            ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="grados" class="form-label">Grados:</label>
                            <input type="number" id="grados" name="grados" class="form-control"
                                placeholder="Gradis" value="<?php
                            echo $result['grados'];
                            ?>" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="status" class="form-label">Status:</label>
                            <input type="tel" id="status" name="status" class="form-control"
                                placeholder="Status" value="<?php
                            echo $result['status'];
                            ?>" />
                        </div>
                        
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                             <a href='#' class="btn btn-warning mb-2" onclick="cancelarOperacion();">Cancelar</a>
                            <input class="btn btn-danger mb-2" href="#" onclick="modificarServo(<?php echo $id_servo;?>); " type="submit" value="Actualizar datos"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>

<?php }?>