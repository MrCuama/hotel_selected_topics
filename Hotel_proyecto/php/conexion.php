<?php 
    $servername = "DESKTOP-ADJHM21";
    $conexion = array( "Database"=>"HOTEL", 
                "UID"=>"sa", 
                "PWD"=>"root",
                "CharacterSet"=>"UTF-8");

    $conn = sqlsrv_connect( $servername, $conexion);
    
    if( $conn ) {
         echo "Conexión establecida.<br />";
    }else{
         echo "Conexión no se pudo establecer.<br />";
         die( print_r( sqlsrv_errors(), true));
    }

?>