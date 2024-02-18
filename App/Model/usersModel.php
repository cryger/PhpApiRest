<?php

include_once("../Model/connectionModel.php");
include_once("../Controller/connectionController.php");
header('Content-Type: application/json');

//El modelo de usuario, contiene toda la sintaxis logica y operacional
//que se requiere para las consultas que tienen que realizarse a la tabla de usuario
//para propositos de testeo, esta clase unicamente tiene el metodo GET el cual es requerido para el correcto funcionamiento, sin embargo es posible agregar los metodos POST, UPDATE y DELETE
//segun corresponda

class usersModel{

    private $dbInstance;

    public function __construct($host, $dbname, $username, $password){
        //esta instancia realiza una abstraccion o llamado al metodo de conexion general dentro de los controladores de la base de datos
        $this->dbInstance = new ConnectionController($host, $dbname, $username, $password);
}

// Esta funcion contiene toda la logica que se requeria para las consultas a la tabla usuario en la base de datos esta retorna un JSON con los usuarios y en caso de error este tambien los muestra
public function getUsers()
{

    try{
        //$query = "SELECT * FROM public.user;";//consulta en la base de datos y trae los usuarios generales
        //$stmt = $this->dbInstance->connectionModel->query($query);
        $query = "SELECT * FROM public.users;"; //Query to execute in the DB.
        $stmt = $this->dbInstance->connectionModel->query($query);
        $users = $stmt ->fetchAll(PDO::FETCH_ASSOC); //trae toda la informacion que se obtiene en la consulta ($query)
        
        //establece la respuesta en un encabezado para indicar que es un contenido JSON

        http_response_code(200);
        return json_encode($users);           
    }catch(Exception $error){
    http_response_code(400);
    $message = (object)[
        'Mensaje' => 'Algo ha ocurrido, por favor informe el problema',
        'Error' => $error
    ];
    return json_encode($message);
    }
}
}
//valido si se quiere ingresar por una ruta desde la URL sin loguearse
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    header("Location: ../Views/");
    exit();
}