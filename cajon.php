<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cajon</h1>

</div>
<div>
    <form id="frmCajon" name="frmCajon">
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Numero</label>
                <input type="number" class="form-control" id="numero" name="numero">
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Estatus</label>
                <select class="form-control" id="estatus" name="estatus">
                    <option>Disponible</option>
                    <option>Ocupado</option>
                    <option>Inhabilitado</option>
                </select>
            </div>
        </div>
        
        <input type="button" class="btn btn-primary" onclick="registrarCajon();" value="Entrar"></input>
    </form>
    <hr class="sidebar-divider my-4">
    <div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Estatus</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'conexion.php';
                $query="SELECT id_cajon, numero, status FROM cajon";
                $ejecutar=$conexion->query($query);
                while($result=$ejecutar->fetch_array()){
                    echo "<tr>
                    <td>".$result['numero']."</td>
                    <td>".$result['status']."</td>
                    <td><a  onclick='eliminarCajon(".$result['id_cajon'].");'>Eliminar</a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>
</div>