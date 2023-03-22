<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $NombreL = $conex->real_escape_string($_POST['NombreL']);
    $Descripcion = $conex->real_escape_string($_POST['Descripcion']);
    $Telefono = $conex->real_escape_string($_POST['Telefono']);
    $Email = $conex->real_escape_string($_POST['Email']);
    $Facebook = $conex->real_escape_string($_POST['Facebook']);
    $Horario = $conex->real_escape_string($_POST['Horario']);
    if($NombreL == "" || $Descripcion == "" || $Telefono == "" || $Email == "" || $Facebook == "" || $Horario == ""){
        $Alerta="Algunos datos estan vacios";
    }
    else{
        $inserta = "INSERT INTO lugar(NombreL, Descripcion, Telefono, Email, Facebook, Horario)VALUES('$NombreL','$Descripcion','$Telefono','$Email','$Facebook','$Horario')";
        $registra = $conex->query($inserta);
        if($registra>0){
            echo"registro exitoso";
        }else{
            echo"error al registrar";
        } 
    }
    }
    ?>
    