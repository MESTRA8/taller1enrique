<?php
require 'conexion.php'; 
$idtabla1 = $_POST['idtabla1'];
$apodo = $_POST['apodo'];
$ciudad = $_POST['ciudad'];
$aniversario = $_POST['aniversario'];
$cumpleaños = $_POST['cumpleaños'];
$estatura = $_POST['estatura'];
$email = $_POST['email'];
if ($idtabla1 == null || $apodo == null || $ciudad == null || $email == null || $aniversario == null || $cumpleaños == null || $estatura == null) {
    echo "<script> alert('LOS CAMPOS NO DEBEN ESTAR VACIOS');
            location.href = '/clase/tabla2create.php';
            </script>";
} else {
    $insertar = "INSERT INTO tabla2 (idtabla1, apodo, ciudad, aniversario ,cumpleaños, estatura, email) 
            VALUES ('$idtabla1', '$apodo', '$ciudad', '$aniversario', '$cumpleaños', '$estatura', '$email')";
    mysqli_query($mdb, $insertar);
    $sql = "SELECT tabla2.id, apodo,ciudad,aniversario,cumpleaños,estatura,email,idtabla1,materia,nombre,apellido 
            FROM tabla1, tabla2 WHERE idtabla1 = tabla1.id";
    $consulta = mysqli_query($mdb, $sql);
    $tabla2 = [];
    $idultimo = mysqli_insert_id($mdb);
    $i = $idultimo;
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
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido']
        ];
    }
  echo (json_encode($tabla2));
}
