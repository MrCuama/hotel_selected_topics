<?php 
    include("conexion.php");

    $email=$_POST["email"];
    $pass=$_POST["pass"];

     $sql="SELECT * FROM CLIENTE WHERE email='$email' and password='$pass'";//falta CONTRASEÑA :V
     $params = array();
     $options =  array("Scrollable"=> SQLSRV_CURSOR_KEYSET);  
     $stmt = sqlsrv_query($conn,$sql,$params, $options);
     $row_count = sqlsrv_num_rows( $stmt );
     
     if ($row_count === false){
          echo "Error in retrieveing row count.";
     }
     else{
          if($row_count=1){
               header("location:../index.html");
               echo "<h5>EL USUARIO NO existe</h5>"; // aqui va una alerta */
          }
          else{

                //entrar a la pagina correcpondiente
                echo "<h5>EL USUARIO YA ESTA REGISTRADO</h5>"; // aqui va una alerta */
          }
     }
?>