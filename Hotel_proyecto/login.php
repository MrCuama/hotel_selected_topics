
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="css/estilos_form.css">
    <title>Document</title>
</head>
<body>
    <form class="formulario" action="php/control.php" method="post">
    
        <h1>Login</h1>
         <div class="contenedor">
         
                   
             <div class="input-contenedor">
             <i class="fas fa-envelope icon"></i>
             <input type="text" name="email" placeholder="Correo Electronico">
             
             </div>
             
             <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
             <input type="password" name="pass" placeholder="Contraseña">
             </div>
    
            
    
        
    
             <input type="submit" value="Inicia sesión" class="button">
             <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
             <p>¿No tienes una cuenta?<a class="link" href="form.html">Registrate</a></p>
         </div>
        </form>
</body>
</html>