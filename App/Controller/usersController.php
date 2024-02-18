<?php
include_once("../Controller/usersController.php");
include_once("../Model/usersModel.php");
include_once("../Controller/connectionController.php");

//Esta clase está destinada a tener únicamente responsabilidades de consulta para los usuarios. Se comporta como un puente entre el cliente y el modelo.
class userController {

  private $instance;
  public function __construct($host, $dbname, $username, $password){
    $this->instance = new usersModel($host, $dbname, $username, $password);
  }
  //This function allows you to take users from the database. 
  public function getUsers()
  {
    $ans = $this->instance->getUsers();
    return $ans;
  }

}
// Es necesario crear un bloqueo para evitar que ingresen de manera ilegitima mediante la URL
// por lo que valido la ruta de modo que la URL y si no esta logueado correctamente realiza una redireccion
// a un bloqueo
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  header("Location: ../views/");
  exit();
}
