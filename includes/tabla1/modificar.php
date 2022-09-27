<?php
require 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$materia = $_POST['materia'];
if ($id == null || $nombre == null || $apellido == null || $materia == null) {
    echo "<script> alert('No se permite Campos Vacios');
                location.href = '/clase/tabla1update.php';
                </script>";
} else {
    $modificar = "UPDATE tabla1 SET nombre='$nombre', apellido='$apellido', materia='$materia' WHERE id='$id'";
    mysqli_query($mdb, $modificar);
    $sql = "SELECT * FROM tabla1 WHERE id = '$id'";
    $consulta = mysqli_query($mdb, $sql);
    $tabla1 = [];
    $i = $id;
    while ($row = mysqli_fetch_assoc($consulta)) {
        $tabla1[$i]['id'] = $row['id'];
        $tabla1[$i]['nombre'] = $row['nombre'];
        $tabla1[$i]['apellido'] = $row['apellido'];
        $tabla1[$i]['materia'] = $row['materia'];
    }
    echo (json_encode($tabla1));
}
