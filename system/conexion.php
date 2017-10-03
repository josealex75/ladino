<?php

class conexion {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $baseDatos = "dbs_la_dino";
    private $objConexion;

//funcion constructora

    function __construct() 
    {
        $objConexion = new mysqli($this->host, $this->user, $this->password, $this->baseDatos);

        if ($objConexion->connect_errno) 
            {
            echo "Error de conecxion en la base de datos" .$this->objConexion->connect_error;
            exit();
        }
        else 
        {
            //echo "Conectados al servidor y listos para Utilizar la base de datos";
            return $this -> objConexion;
        }
    }

}
$conexion = new conexion();
