<div class="table-responsive" style="margin-top: 15px;">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Numero</th>
            <th scope="col">Eliminar</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT * FROM cajon";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>  
                <td>".$result['numero']."</td>
                <td><a href='#' onclick='eliminarCajon(".$result['id_cajon'].")'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>