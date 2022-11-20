<?php
     $host = "localhost";
     $username = "root";
     $password = "1781324";
     $db = "taller_mecanico";
 
     $conn = new mysqli($host, $username, $password, $db);
 
     if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
     else echo "Connected successfully <br>";

     $cve_puesto = $_POST['cve_puesto'];
     $nombre = $_POST['nombre'];

     $sql = "insert into auto (cve_puesto, nombre) values ('".$cve_puesto."', '".$nombre."')";
     echo($sql);
 
     mysqli_query($conn, $sql);
 
     header("Location: ../Registrar/RegistraPuesto.php");
     exit();
?>