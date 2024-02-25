<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Empleado</h1>

</div>
<div>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="id_vehiculo">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="id_cajon">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
                <label for="id_vehiculo">Telefono</label>
                <input type="text" class="form-control" name="numero" id="numero">
            </div>
            <div class="form-group col-md-6">
                <label for="id_cajon">Corrreo</label>
                <input type="email"class="form-control"name="correo" id="correo">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
                <label for="id_vehiculo">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario">
            </div>
            <div class="form-group col-md-6">
                <label for="id_cajon">Contraseña</label>
                <input type="password"class="form-control"name="contrasena" id="contrasena">
            </div>
        </div>
        
        <input type="button" class="btn btn-primary" onclick="registrarEmpleado();" value="Entrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_empleado, nombre, direccion, telefono, correo FROM empleados";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['nombre']."</td>
                    <td>".$result['direccion']."</td>
                    <td>".$result['telefono']."</td>
                    <td>".$result['correo']."</td>
                    <td><a href='#' onclick='editarEmpleado(".$result['id_empleado'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarEmpleado(".$result['id_empleado'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>