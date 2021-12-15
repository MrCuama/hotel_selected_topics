<?php include("conexion.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css_admin/admin.css">
    <title>admin</title>
</head>
<body>
   <header>
    <div class="logo-admin">
        <img src="admin_img/admin3.png" alt="Not found">
    </div>
    <nav class="menu-navegacion">
        <ul>
            <li><a href="#">Registro usuarios</a></li>
            <li><a href="#">Registro de ventas</a></li>
            <li><a href="#">Reporte hotel</a></li>
            <li><a href="index.html">Cerrar sesión</a></li>

        </ul>
    </nav>
    
   </header>
   <div class="contenido">
   <h1>Registro de Usuarios</h1>
         <div class="usuario_table">
           
             <table class="user">
                    <th>Nombre</th>
                    <th>A_Paterno</th>
                    <th>A_Materno</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                </table>
                <?php
            $query="SELECT * FROM CLIENTE";
            $res=sqlsrv_query($con,$query);

            while($row=sqlsrv_fetch_array($res)){
        
        ?> 
             
               <tr>
               <td><?=$row[0]?></td>
               <td><?=$row[1]?></td>
               <td><?=$row[2]?></td>
               <td><?=$row[3]?></td>
               <td><?=$row[4]?></td>
               </tr> 
        <?php   
            }
        ?> 
        
         </div>
    </div>
</body>
</html>