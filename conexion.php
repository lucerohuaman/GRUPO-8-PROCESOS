<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=id15659702_login', 'id15659702_lu', '|dF$SO1|@SjIb=Vy');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>