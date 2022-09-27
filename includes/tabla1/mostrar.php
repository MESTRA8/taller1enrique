<?php
function mostrar(): array
{
    try {
        require 'conexion.php';
        $sql = "SELECT * FROM tabla1";
        $consulta = mysqli_query($mdb, $sql);
        $tabla1 = [];
        $i = 0; 
        while ($row = mysqli_fetch_assoc($consulta)) {
            $tabla1[$i]['id'] = $row['id'];
            $tabla1[$i]['nombre'] = $row['nombre'];
            $tabla1[$i]['apellido'] = $row['apellido'];
            $tabla1[$i]['materia'] = $row['materia'];
            $i++;
        }
        return $tabla1;
    } catch (\Throwable $th) {
        var_dump(throw $th);
    }
}
mostrar();
