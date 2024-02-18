# Consulta vía Web Service tipo REST - PHP

# Descripción
El objetivo de este proyecto es crear una aplicación web que permita la consulta de una base de datos a través de una petición y que los datos se puedan ver en un formato JSON. La aplicación permite hacer login y una vez este se hace, nos entrega el resultado de los datos almacenados en nuestra base de datos PostgreSQL.

El proyecto se ha desarrollado con PHP sin uso de frameworks, CSS básico y Xampp para la ejecución de PHP.

# Authors
[@Cryger](https://github.com/cryger)
Henry Alfredo Garcia Palacio

# Programas necesarios
  Para la ejecución del proyecto es necesario instalar xampp para el uso de PHP y a su vez se debe contar con PostgreSQL como motor de base de datos.

Adicionalmente, se recomienda usar VSCode como editor de código.

    Enlace a Xampp: https://www.apachefriends.org/es/download.html
    Enlace a PostgreSQL: https://www.postgresql.org/download/
    Enlace a VSCode: https://code.visualstudio.com/download

# Instrucciones de instalación y uso:
    Ejecute apache desde su Xampp
  
  Ejecute su PostgreSQL y cree una nueva base de datos llamada 'dbUsers'. Una vez creada la base de datos, proceda a crear una tabla llamada 'users' que contenga los campos: id, name, last_name, email,   age. Puede hacer uso del siguiente query para la creación de la base de datos:

    CREATE TABLE public.users
     (
         id serial NOT NULL,
         name character varying NOT NULL,
         last_name character varying NOT NULL,
         email character varying NOT NULL,
         age integer NOT NULL,
         PRIMARY KEY (id)
     );

## Nota: Tambien pude importar el archivo 'dbusers' que está en el repositorio.

    3. Clone este repositorio en la carpeta htdocs de su xampp, puede hacerlo mediante el siguiente comando:

      git clone https://github.com/cryger/PhpApiRest

    4. Una vez haya realizado todos los pasos anteriores, podrá abrir la ruta en la cual se encuentra su proyecto y allí poder acceder a todas las funcionalidades de la aplicación.

# API Reference
Root
  POST /app/views/index.php
    #Parameter	#Type	#Description
      username	string (query)	Default value : None
      password	string (query)	Default value : None
##Responses
  #Code	#Description
   200	Successful Response (Datos de los usuarios)
   400	Not found
# Conceptos y tecnologías utilizados:
  Clases (POO)
  Principio Singleton
  Patron MVC
  Manejo de errores y excepciones.
  PHP
  CSS
  PostgreSQL

