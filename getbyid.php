<?php

header("Access-Control-Allow-Origin: http://localhost:4200");

/*FILTRA TODO*/


        include "conexion.php";
        try{
            $consulta = "SELECT * FROM servant where id = ?";
            $idServant = $_GET["id"];
            $basedatos = new conexion_db;
            $consulta_servant = $basedatos->accesoDB()->prepare($consulta);
            $consulta_servant->execute([$idServant]);
            $resultado = $consulta_servant->fetchAll();
            echo json_encode($resultado);

        }catch(PDOexception $e){
            echo 'Se ha producido un error' . $e->getMessage();
        }
    

?>