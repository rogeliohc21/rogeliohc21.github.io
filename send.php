<?php

include("conexion.php");

if(isset($_POST['send'])) {

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['sexo']) >= 1 &&
        strlen($_POST['edad']) >= 1 &&
        strlen($_POST['localidad']) >= 1 &&
        strlen($_POST['voto']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $sexo = trim($_POST['sexo']);
        $edad = trim($_POST['edad']);
        $localidad = trim($_POST['localidad']);
        $voto = trim($_POST['voto']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, correo, sexo, edad, localidad, voto, fecha)
                     VALUES ('$name', '$email', '$sexo', '$edad', '$localidad', '$voto', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
                <h3 class="success">Tu registro se ha completado</h3>
            <?php    
        } else {
            ?>
            </h3 class="error">Ocurrio un error</h3>
             <?php    
        }    
    } else {
        ?>
        </h3 class="error">Llena todos los campos</h3>
         <?php
    }

}


?>