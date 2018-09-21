<?php
namespace dao;

include_once('dao.php');

class DaoUsuario extends Dao{
    
    public function login($name,$pass){
        $conexion = $this->getConexion();
        $sql = "SELECT * FROM users";
        echo $sql;
    }

    public function register($name,$pass){
        $conexion = $this->getConexion();
        //Se crea la consulta
        $sql = "insert into users (username,pass) values(:username,:pass)";
        //preparar la consulta
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':username',$name);
        $statement->bindParam(':pass',$pass);

        if(!$statement){
            return "Error al insertar un registro";
        }else{
            $statement->execute();
            return "Registro creado con exito";
        }
    }

    

}
