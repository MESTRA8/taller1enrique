<?php
include 'conexion.php';
$buscar = $_GET['buscar'];
if ($buscar == null) {
    echo "<script> alert('No se permite Campos Vacios');
                location.href = '/clase/tabla1read.php';
                </script>";
} else {
    $sql = "SELECT * FROM tabla1 WHERE id = '$buscar'";
    $query = mysqli_query($mdb, $sql);
    $tabla1 = [];
    $i = $buscar;
    while ($row = mysqli_fetch_assoc($query)) {
        $tabla1[$i]['id'] = $row['id'];
        $tabla1[$i]['nombre'] = $row['nombre'];
        $tabla1[$i]['apellido'] = $row['apellido'];
        $tabla1[$i]['materia'] = $row['materia'];
    }
    echo (json_encode($tabla1));
}
