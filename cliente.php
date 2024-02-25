<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cliente</h1>

</div>
<div>
    <form id="frmClientes" name="frmClientes">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-7">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
            <div class="form-group col-md-5">
                <label for="numero">Numero</label>
                <input type="text"class="form-control"name="numero" id="numero">
            </div>
        </div>
        
        <input type="button" onclick="registrarCliente();" class="btn btn-primary" value="Entrar"></input>
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
                $query="SELECT id_cliente, nombre, direccion, telefono, correo FROM cliente";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['nombre']."</td>
                    <td>".$result['direccion']."</td>
                    <td>".$result['telefono']."</td>
                    <td>".$result['correo']."</td>
                    <td><a href='#' onclick='editarCliente(".$result['id_cliente'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarCliente(".$result['id_cliente'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>