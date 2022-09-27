<?php
function eliminar()
{
    require 'conexion.php';
    $eliminar = $_POST['eliminar'];
    if ($eliminar == null) {
        echo "<script> alert('No se permite Campos Vacios');
                    location.href = '/clase/tabla1delete.php';
                    </script>";
    } else {
        buscar($eliminar);
        $consulta = "DELETE FROM tabla1 where id = '$eliminar'";
        mysqli_query($mdb, $consulta);
    }
}
function buscar($id)
{
    include 'conexion.php';
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
eliminar();
