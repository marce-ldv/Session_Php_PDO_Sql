<?php
namespace controller;
use dao\DaoUsuario as DaoUsuario;

class ControllerUser{
    
    private $daoUser;

    function __construct() {
        $this->daoUser = new DaoUsuario();
    }

    public function login($name,$pass){
        $this->daoUser->login($name,$pass);
    }

    public function register(){
        
    }

    public function viewLogin(){
        include(ROOT . 'view\login.php');
    }

    public function viewRegister(){
        include(ROOT . 'view\registrarse.php');
    }

}

