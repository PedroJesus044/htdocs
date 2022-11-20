<?php
 $host = "localhost";
 $username = "root";
 $password = "1781324";
 $db = "taller_mecanico";

 $conn = new mysqli($host, $username, $password, $db);

 if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
 else echo "Connected successfully <br>";

    $ID = $_POST['ID'];
    $placa = $_POST['placa'];
    $rfc = $_POST['rfc'];
    $horas_rep = $_POST['horas_rep'];
    $fecha_rep = $_POST['fecha_rep'];

    $sql = "insert into auto (ID, placa, rfc, horas_rep, fecha_rep) values ('".$ID."', '".$placa."', ".$rfc.", '".$horas_rep."', '".$fecha_rep."')";
    echo($sql);

    mysqli_query($conn, $sql);

    header("Location: ../Registrar/RegistraTrabajos.php");
    exit();
?>