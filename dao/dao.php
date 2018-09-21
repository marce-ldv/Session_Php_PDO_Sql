<?php
namespace dao;
abstract class Dao{
    
    protected function connection(){
        try{
            $conexion = new PDO("mysql:host=$host;dbname=$db",$user,$password);
            return $conexion;
          }catch(PDOException $e){
            echo 'Error '. $e->getMessage();
            die();
          }
    }


}
