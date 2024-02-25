<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tarifa</h1>

</div>
<div>
    <form id="frmTarifas" class="frmTarifas">
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Tarifa</label>
                <input type="number" class="form-control" id="tarifa" name="tarifa">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Monto</label>
                <input type="number" class="form-control" id="monto" name="monto">
            </div>
        </div>
        
        <input type="button" class="btn btn-primary" onclick="registrarTarifa();" value="Entrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Tarifa</th>
                <th scope="col">Monto</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_tarifa, tarifa, monto FROM tarifa";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['tarifa']."</td>
                    <td>".$result['monto']."</td>
                    <td><a href='#' onclick='editarTarifa(".$result['id_tarifa'].");'>Editar</a></td>
                    <td><a href='#' onclick='eliminarTarifa(".$result['id_tarifa'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>