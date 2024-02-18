<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/styles.css">
  <link rel="icon" href="../../public/assets/favicon.ico" type="image/x-icon">
  <title>Connecting PostgreSQL with PHP.</title>
</head>

<body>
  <!-- Esta vista es la pantalla principal de la aplicación, le permite ver el formulario de inicio de sesión. Aquí se redirigen todas las rutas "bloqueadas". -->
  <div class="container">
    <h2>Login</h2>
    <form action="./users.php" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

</body>

</html>