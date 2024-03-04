<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <th scope="col">Valor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $query="SELECT * FROM luminosidad";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                
                <td>".$result['valor']."</td>
                <td>".$result['fecha']."</td>
                <td>".$result['hora']."</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>