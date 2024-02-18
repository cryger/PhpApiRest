<?php
//Esta vista actua como un endpoint o punto de terminacion para
//todos los usuarios.
// Esta vista contiene toda la logica para validar las credenciales del formulario y simplemente
// hace las llamadas al controlador y pregunta por los usuarios

include_once("../Controller/usersController.php");
//chequea si el formulario fue enviado 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

      //valida el usuario y el password
  if ($username == "pruebas" && $password == "pruebas123") {
    //crea una instancia del controlador de conexiones 
    $ans = new userController("localhost", "dbUser", "root", "");
   //Trae la respuesta desde la base de datos para con ello mostrar todos los usuarios
    $users = $ans->getUsers();
    echo ($users);
    return $users;
  } else {
    //Si se realiza un logueo incorrecto, la aplicacion me mostrara un archivo en estructura JSON con un encabezado y el error correspondiente

    header('Content-Type: application/json');
    http_response_code(400);
    $message = (object) [
      'Message' => 'Invalid credentials.'
    ];
    $message = json_encode($message);
    echo $message;
    return $message;
  }
} else {
  //si se intenta ingresar mediante la URL, este simplemente solicitara que se haga un logueo
  header("Location: ./index.php");
  exit();
}

// Importante: Cabe aclarar que para este desarrollo el metodo POST
// ha sido utilizado unicamente para controlar el acceso directo al directorio mediante URL
//pero en entornos de creacion de API, se puede emplear otros metodos o validaciones, ya sean mediante tokens
// o tambien GET el cual es especialmente para este tipo de consultas
?>