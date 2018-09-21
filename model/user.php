<?php
namespace model;
class User{
    private $id;
    private $username;
    private $password;

    function __construct($id,$username,$password){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }


}
