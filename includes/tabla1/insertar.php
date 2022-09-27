<?php
require 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$materia = $_POST['materia'];
if($nombre == null || $apellido == null || $materia == null){
    echo "<script> alert('No debe Haber campos Vacios');
            location.href = '/clase/tabla1create.php';
            </script>";
}else{
    $insertar = "INSERT INTO tabla1(nombre, apellido, materia) VALUES ('$nombre','$apellido','$materia')";
    $sql = mysqli_query($mdb, $insertar);
    $sql = "SELECT * FROM tabla1";
    $consulta = mysqli_query($mdb, $sql);
    $tabla1 = [];
    $idultimo = mysqli_insert_id($mdb);
    $i = $idultimo; 
    while ($row = mysqli_fetch_assoc($consulta)) {
        $tabla1[$i]['id'] = $row['id'];
        $tabla1[$i]['nombre'] = $row['nombre'];
        $tabla1[$i]['apellido'] = $row['apellido'];
        $tabla1[$i]['materia'] = $row['materia'];
    }
    echo (json_encode($tabla1));
}

