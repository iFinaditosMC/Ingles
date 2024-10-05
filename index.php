<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="javascript/java.js"></script>

    <title>Formulario de registro e inicio sesion</title>
</head>
<body>
    <div class="container-form" id="container-sign-in">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido al curso de Ingles</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesion con tus 
                datos</p>
                <input type="button" value="Iniciar Sesion"  onclick="sesion()">
            </div>
        </div>
      

        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>           
                    <i class='bx bxl-github' ></i>  
                    <i class='bx bxl-linkedin' ></i>
                </div>
              
         
            <p>o usa tu email para registrarte</p>
            <form class="form" method="post">
                <label for="">
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Nombre Completos" name="name">
                </label>

                <label for="">
                    <i class='bx bx-envelope' ></i>                    
                    <input type="email" placeholder="Correo Electronico" name="email">
                </label>

                <label for="">
                    <i class='bx bx-lock-alt' ></i>                
                    <input type="password" placeholder="Contraseña" name="password" maxlength="15" required>
                </label>
                <input type="submit" value="Registrarse" onclick="enterregister()" name="registrarse">
                <?php
                    include("conexion/validacion.php");
                ?>
            </form>
            </div>
        </div>
    </div>    
    




    <div class="container-form hide" id="container-sign-up">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido nuevamente</h2>
                <p>Para unirte a nuestra comunidad por favor Inicia Sesion con tus 
                datos</p>
                <input type="button" value="Registrarse"  onclick="registrarse()">
            </div>
        </div>
        
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesion</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>           
                    <i class='bx bxl-github' ></i>  
                    <i class='bx bxl-linkedin' ></i>
                </div>
              
         
            <p>o iniciar sesion con una cuenta</p>
            <form class="form">
                <label for="">
                    <i class='bx bx-envelope' ></i>                    
                    <input type="email" placeholder="Correo Electronico" name="email">
                </label>

                <label for="">
                    <i class='bx bx-lock-alt' ></i>                
                    <input type="password" placeholder="Contraseña" name="password">
                </label>
                <input type="submit" value="Iniciar Sesion" name="Login">
            </form>
            </div>
        </div>
    </div>    
</body>
</html>