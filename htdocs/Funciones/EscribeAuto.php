<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $anio_fab = $_POST['anio_fab'];
    $modelo = $_POST['modelo'];

    $sql = "insert into auto (placa, marca, anio_fab, modelo) values ('".$placa."', '".$marca."', ".$anio_fab.", '".$modelo."')";
    echo($sql);

    mysqli_query($conn, $sql);

    header("Location: ../Registrar/RegistraAuto.php");
    exit();
?>
