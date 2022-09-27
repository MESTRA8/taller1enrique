<?php
function mostrar()
{
    try {
        require 'conexion.php';
        $sql = "SELECT tabla2.id, apodo,ciudad,aniversario,cumpleaños,estatura,email,idtabla1,materia,nombre,apellido 
        FROM tabla1, tabla2 WHERE idtabla1 = tabla1.id";
        $consulta = mysqli_query($mdb, $sql);
        $tabla1 = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($consulta)) {
            $tabla1[$i]['id'] = $row['id'];
            $tabla1[$i]['apodo'] = $row['apodo'];
            $tabla1[$i]['ciudad'] = $row['ciudad'];
            $tabla1[$i]['aniversario'] = $row['aniversario'];
            $tabla1[$i]['cumpleaños'] = $row['cumpleaños'];
            $tabla1[$i]['estatura'] = $row['estatura'];
            $tabla1[$i]['email'] = $row['email'];
            $tabla1[$i]['data_fk'] = [
                'idtabla1' => $row['idtabla1'],
                'materia' => $row['materia'],
                'nombre' => $row['nombre'],
                'apellido' => $row['apellido']
            ];
            $i++;
        }
        return $tabla1;
    } catch (\Throwable $th) {
        var_dump(throw $th);
    }
}

mostrar();
