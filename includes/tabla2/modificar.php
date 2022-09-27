<?php
function modificar()
{
    require 'conexion.php';
    $id = $_POST['id'];
    $idtabla1 = $_POST['idtabla1'];
    $apodo = $_POST['apodo'];
    $ciudad = $_POST['ciudad'];
    $aniversario = $_POST['aniversario'];
    $cumpleaños = $_POST['cumpleaños'];
    $estatura = $_POST['estatura'];
    $email = $_POST['email'];
    if (
        $id == null || $idtabla1 == null || $apodo == null || $ciudad == null
        || $aniversario == null || $cumpleaños == null || $estatura == null || $email == null
    ) {
        echo "<script> alert('No se permiten Campos Vacios');
                location.href = '/clase/tabla2update.php';
                </script>";
    } else {
        $sql = "UPDATE tabla2 SET idtabla1='$idtabla1',apodo='$apodo', ciudad='$ciudad',aniversario='$aniversario',
            cumpleaños='$cumpleaños', estatura=$estatura, email='$email' WHERE id=$id";
        mysqli_query($mdb, $sql);
        mostrar($id);
    }
}
function mostrar($id)
{
    require 'conexion.php';
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

modificar();
