<?php

header("Access-Control-Allow-Origin: http://localhost:4200");

/*FILTRA TODO*/


        include "conexion.php";
        try{
            $consulta = "SELECT email_user, password_user, permisos_user, api_key FROM users Where email_user = ? AND password_user = ?";
            $email_user = $_GET["email_user"];
            $password_user = $_GET["password_user"];
            $basedatos = new conexion_db;
            $consulta_user = $basedatos->accesoDB()->prepare($consulta);
            $consulta_user->execute([$rareza]);
            $resultado = $consulta_user->fetchAll();
            echo json_encode($resultado);

        }catch(PDOexception $e){
            echo 'Se ha producido un error' . $e->getMessage();
        }
    

?>