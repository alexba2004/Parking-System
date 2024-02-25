<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Vehiculo</h1>

</div>
<div>
    <form>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="id_vehiculo">Matricula</label>
                <input type="text" class="form-control" name="matricula" id="matricula">
            </div>
            <div class="form-group col-md-4">
                <label for="id_cajon">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="modelo">
            </div>
            <div class="form-group col-md-4">
                <label for="id_cajon">Color</label>
                <input type="color" class="form-control" name="color" id="color">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-4">
                <label for="id_vehiculo">Puertas</label>
                <input type="number" class="form-control" name="puertas" id="puertas">
            </div>
            <div class="form-group col-md-4">
                <label for="id_cajon">Tipo</label>
                <input type="text"class="form-control"name="tipo" id="tipo">
            </div>
            <div class="form-group col-md-4">
                <label for="id_cajon">ID Cliente</label>
                <select class="form-control" id="id_cliente" name="id_cliente">
                    <option>Seleccione una opcion</option>
                    <?php 
                    include 'conexion.php';
                    $query="SELECT id_cliente, nombre FROM cliente";
                    $ejecutar=$conexion->query($query);
                    while($result=$ejecutar->fetch_array()){
                        echo"<option value='".$result['id_cliente']."'>".$result['nombre']."</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        
        <input type="button" class="btn btn-primary" onclick="registrarVehiculo()" value="Entrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Modelo</th>
                <th scope="col">color</th>
                <th scope="col">puertas</th>
                <th scope="col">tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_vehiculo, matricula, modelo, color, puertas,tipo FROM vehiculo";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['matricula']."</td>
                    <td>".$result['modelo']."</td>
                    <td>".$result['color']."</td>
                    <td>".$result['puertas']."</td>
                    <td>".$result['tipo']."</td>
                    <td><a href='#' onclick='editarVehiculo(".$result['id_vehiculo'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarVehiculo(".$result['id_vehiculo'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<div class="container" id="result">

</div>