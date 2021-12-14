<?php 
    include("conexion.php");

    $nombre=$_POST["name"];
    $paterno=$_POST["ap_p"];
    $materno=$_POST["ap_m"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $tel=$_POST["tel"];

     $sql="SELECT * FROM CLIENTE WHERE email='$email' ";
     $params = array();
     $options =  array("Scrollable"=> SQLSRV_CURSOR_KEYSET);  
     $stmt = sqlsrv_query($conn,$sql,$params, $options);
     $row_count = sqlsrv_num_rows( $stmt );
     
     if ($row_count === false){
          echo "Error in retrieveing row count.";
     }
     else{
          if($row_count<1){
               //echo $nombre,$paterno,$materno,$email,$tel,$pass;
               //$query=" INSERT INTO CLIENTE (nombre) 
               //VALUES ('$nombre') ";
               $query=" EXEC Alta_Cliente '$nombre','$paterno','$materno','$email','$tel','$pass'";
               $res=sqlsrv_prepare($conn,$query);
               if(sqlsrv_execute($res)){
                    echo "<h5>EL USUARIO REGISTRADO</h5>"; // aqui va una alerta */
               }else{
                    echo "<h5>EL USUARIO NO HA REGISTRADO</h5>"; // aqui va una alerta */
               }
               
          }
          else{
          echo "<h5>EL USUARIO YA ESTA REGISTRADO</h5>"; // aqui va una alerta */
          }
     }
?>