<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">ServoMotor</h1>

</div>
<div>
    <form id="frmServo" class="frmServo">
        
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAddress">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>

            <div class="form-group col-md-4">
                <label for="inputAddress">Grados</label>
                <input type="number" class="form-control" id="grados" name="gardos">
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress">Status</label>
                <select class="form-control" id="status" name="status">
                    <option >Encendido</option>
                    <option >Apagado</option>
                    <option >Inhabilitado</option>
                </select>
            </div>
        </div>
        
        
        <input type="button" href="#" class="btn btn-primary" onclick="registrarServo();" value="Entrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Grados</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_servo, descripcion, grados, status FROM servo";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['id_servo']."</td>
                    <td>".$result['descripcion']."</td>
                    <td>".$result['grados']."</td>
                    <td>".$result['status']."</td>

                    <td><a href='#' onclick='editarServo(".$result['id_servo'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarServo(".$result['id_servo'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>