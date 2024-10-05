<?php

include("conexion.php");
$nombre = "";
$correo = "";
$contraseña = "";
if(isset($_POST["registrarse"])){
        if(strlen($_POST["name"])>=1 && strlen($_POST["email"])>=1 && Strlen($_POST["password"])>=1){
            $nombre=trim($_POST["name"]);
            $correo=trim($_POST["email"]);
            $contraseña=trim($_POST["password"]);
            //VALIDACION NOMBRE:
                if(preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',$nombre)){ 
                        //VALIDACION DE EMAIL:
                        if(preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $correo)){
                                    //VALIDACION DE CONTRASEÑA
                                if(preg_match('/^[a-zA-Z0-9]{1,15}$/',$contraseña)){                                                        
                                    $consultar="INSERT INTO $tabla(Name,email,password) VALUES ('$nombre','$correo','$contraseña')";
                                    $resultado = $conexion->query($consultar);
                                    if($resultado){
                                        ?>
                                        <h3 class="ok">Te has inscrito correctamente</h3>
                                        <?php
                                        $nombre = "";
                                        $correo = "";    
                                        $contraseña = "";
                                    }else{
                                        ?>
                                        <h3 class="bad">Ups ha ocurrido un error</h3>
                                        <?php
                                    }
                                }else{
                                    ?>
                                        <h3 class="bad">La contraseña debe tenr máximo de 15 caracteres.</h3>";
                                    <?php
                                }   
                        }else{
                            ?>
                            <h3 class="bad">El correo debe ser válido solo letras, números, @ y punto.</h3>
                         <?php
                        }
                }else{
                     ?>
                        <h3 class="bad">El nombre solo puede contener letras y espacios.</h3>
                     <?php
                }
        }else{
            ?>
                 <h3 class="bad">Por favor completo los campos correctamente</h3>
            <?php
        }
}

?>