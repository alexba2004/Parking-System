<script src="scripts/js/funciones.js"></script>
<script src="scripts/js/jquery.min.js"></script>
<div class="row mt-2 px-2 mb-3">
    <div class="col mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <p>Clientes</p>
                <hr>
                <form id="frmClientes" name="frmClientes" method="POST"> <!-- FORM-->
                <div class="row">
                        <div class="col">
                            <label for="distanica" class="form-label">Distancia:</label>
                            <input type="text" id="distanica" name="distanica" class="form-control"
                                placeholder="Dirección" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" id="fecha" name="fecha" class="form-control"
                                placeholder="Dirección" />
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <label for="hora" class="form-label">Hora:</label>
                            <input type="hora" id="hora" name="telefono" class="form-control"
                                placeholder="Telefono movil" />
                        </div>
                    <br>

                    <div class="row ">
                        <div class="col-lg-6 ">
                            <input class="btn btn-primary mb-2" onclick="registrarAprox()" type="button" value="guardar"></input>
                        </div>
                    </div>
                </form>
            </div>    
    
        </div>
    </div>
</div>
<div class="container" id="result">
    <?php
    include 'consultar/consultarCliente.php'
    ?>
</div>