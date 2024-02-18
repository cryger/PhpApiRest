<?php
include_once("../model/connectionModel.php");


//Esta clase es la encargada de realizar una comunicacion entre la vista (cliente) y el modelo.
// En resumidas palabras, es la encargada de realizar una conexion directa a la base de datos e interactuar con ella
class ConnectionController
{
  public $connectionModel;

  //This method allows creating the instance of the database.
  public function __construct($host, $dbname, $username, $password)
  {
    $this->connectionModel = ConnectionModel::getInstance($host, $dbname, $username, $password);
  }
}
// Es necesario crear un bloqueo para evitar que ingresen de manera ilegitima mediante la URL
// por lo que valido la ruta de modo que la URL y si no esta logueado correctamente realiza una redireccion
// a un bloqueo
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  header("Location: ../views/");
  exit();
}
