<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $NombrePlantel = $conex->real_escape_string($_POST['plantel']);
    $ClaveP = $conex->real_escape_string($_POST['ClaveP']);
    $Direccion = $conex->real_escape_string($_POST['Direccion']);
    $Telefono = $conex->real_escape_string($_POST['Telefono']);
    $Responsable = $conex->real_escape_string($_POST['Responsable']);
    if($NombrePlantel == "" || $ClaveP == "" || $Direccion == "" || $Telefono == "" || $Responsable == ""){
        $Alerta="Algunos datos estan vacios";
    }
    else{
        $inserta = "INSERT INTO plantel(NombrePlantel, ClaveP, Direccion, Telefono, Responsable)VALUES('$NombrePlantel','$ClaveP','$Direccion','$Telefono','$Responsable')";
        $registra = $conex->query($inserta);
        if($registra>0){
            echo"registro exitoso";
        }else{
            echo"error al registrar";
        } 
    }
    }
    ?>
    