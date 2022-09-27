<?php
function eliminar()
{
    require 'conexion.php';
    $id = $_POST['id'];
    mostrar($id);
    $consulta = "DELETE FROM tabla2 where id = '$id'";
    mysqli_query($mdb, $consulta);
}
function mostrar($id)
{
    require 'conexion.php';
    $id = $_POST['id'];
    $sql = "SELECT tabla2.id, apodo,ciudad,aniversario,cumpleaños,estatura,email,idtabla1,materia 
        FROM tabla1, tabla2 WHERE tabla2.id=$id and tabla2.id = tabla1.id";
    $consulta = mysqli_query($mdb, $sql);
    $tabla2 = [];
    $i = $id;
    while ($row = mysqli_fetch_assoc($consulta)) {
        $tabla2[$i]['id'] = $row['id'];
        $tabla2[$i]['apodo'] = $row['apodo'];
        $tabla2[$i]['ciudad'] = $row['ciudad'];
        $tabla2[$i]['aniversario'] = $row['aniversario'];
        $tabla2[$i]['cumpleaños'] = $row['cumpleaños'];
        $tabla2[$i]['estatura'] = $row['estatura'];
        $tabla2[$i]['email'] = $row['email'];
        $tabla2[$i]['data_fk'] = [
            'id' => $row['idtabla1'],
            'materia' => $row['materia'],
        ];
    }
    echo (json_encode($tabla2));
}
eliminar();
