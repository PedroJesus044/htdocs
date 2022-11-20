<?php include("../Components/header.php");?>
<div>
    <form action="../Funciones/EscribeTrabajos.php" method="POST">
    <div class="form-group">
        <label for="placa">ID</label>
        <input class="form-control" id="ID" placeholder="12586" name="ID">
    </div>
    <div class="form-group">
        <label for="marca">Placa</label>
        <input class="form-control" id="placa" placeholder="ABC-123" name="placa">
    </div>
    <div class="form-group">
        <label for="anio_fab">Anio_Fabricación</label>
        <input type="number" class="form-control" id="anio_fab" placeholder="2008" name="anio_fab">
    </div>
    <div class="form-group">
        <label for="modelo">RFC</label>
        <input class="form-control" id="rfc" placeholder="VECJ880326 XXX" name="rfc">
    </div>
    <div class="form-group">
        <label for="modelo">Horas_Rep</label>
        <input class="form-control" id="horas_rep" placeholder="12.5" name="horas_rep">
    </div>
    <div class="form-group">
        <label for="modelo">Fecha_Rep</label>
        <input class="form-control" id="fecha_rep" placeholder="2022-02-02" name="fecha_rep">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include("../Components/footer.php");?>