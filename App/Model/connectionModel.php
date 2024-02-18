<?php

//para crear la tabla, puedes usar el siguiente codigo o 
//importar el archivo  database_script en tu PostgreSQL
//
//create table public.user
// (
//      id serial NOT NULL,
//      name varchar (50) NOT NULL,
//      last_name character varying NOT NULL
//      email varchar(255) NOT NULL,
//      age integer NOT NULL,
//      primary key (id)
// );

// Acontinuacion se crea la clase partiendo del Singleton Pattern

class ConnectionModel {

    //creacion de los atributos privados

    private static $instance;
    private $conn;

    //Inicializo la clase

    private function __construct($host, $dbname, $username, $password )
    {
        try {
            $this->conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
            // echo "Conexion Exitosa!. <br>";
          } catch (PDOException $exp) {
            echo "Connection failed. " . $exp->getMessage();
          }
    }

    //Metodo para instanciar la clase

    public static function getInstance($host, $dbname, $username, $password)
  {
    //si la instancia no existe, automaticamente se crea.
    if (self::$instance === null) {
      self::$instance = new ConnectionModel($host, $dbname, $username, $password);
    }
    //sino, se hace el retorno a la instancia.
    return self::$instance->conn;
  }

}

// Es necesario crear un bloqueo para evitar que ingresen de manera ilegitima mediante la URL
// por lo que valido la ruta de modo que la URL y si no esta logueado correctamente realiza una redireccion
// a un bloqueo

if($_SERVER["REQUEST_METHOD"] == "GET"){
    header("location: ../Views/");
    exit();
}

?>