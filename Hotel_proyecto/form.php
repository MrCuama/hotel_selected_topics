<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
      <link rel="stylesheet" href="css/estilos_form.css">
</head>  

<body>
      <form class="formulario" action="php/altas.php" method="post">
            <h1>Registrate</h1>
            <div class="contenedor">
                  <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" name="name" placeholder="Nombre ">
                  </div>

                  <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" name="ap_p" placeholder="Apellido Paterno ">
                  </div>

                  <div class="input-contenedor">
                        <i class="fas fa-user icon"></i>
                        <input type="text" name="ap_m" placeholder="Apellido Materno ">
                  </div>
            
                  <div class="input-contenedor">
                        <i class="fas fa-envelope icon"></i>
                        <input type="text" name="email" placeholder="Correo Electronico">
                  </div>
                  
                  <div class="input-contenedor">
                        <i class="fas fa-key icon"></i>
                        <input type="password" name="pass" placeholder="Contraseña">
                  </div>

                  <div class="input-contenedor">
                        <i class="fas fa-phone-rotary"></i>        
                        <input type="text" name="tel" placeholder="Teléfono">     
                  </div>

                  <input type="submit" value="Registrate" class="button">
                  <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                  <p>¿Ya tienes una cuenta?<a class="link" href="login.html">Iniciar Sesion</a></p>
            </div>
      </form>
</body>
</html>