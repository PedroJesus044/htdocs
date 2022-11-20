<?php
    $host = "localhost";
    $username = "root";
    $password = "1781324";
    $db = "taller_mecanico";

    $conn = new mysqli($host, $username, $password, $db);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
    else echo "Connected successfully <br>";

    $RFC = $_POST['RFC'];
    $nombre = $_POST['nombre'];
    $cve_puesto = $_POST['cve_puesto'];
    $activo = $_POST['activo'];

    $sql = "insert into mecanico (RFC, nombre, cve_puesto, activo) values ('".$RFC."', '".$nombre."', ".$cve_puesto.", ".$activo.")";
    echo($sql);

    mysqli_query($conn, $sql);

    header("Location: ../Registrar/RegistraMecanico.php");
    exit();
?>
