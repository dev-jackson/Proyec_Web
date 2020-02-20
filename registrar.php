<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Registor</title>
    <?php 
      include_once("./assets/php/init_sest.php")
    ?>
</head>
<body>
<div class="box2">
      <img src="./assets/img/logo.png" alt="" class="imglogo">
      <form action="./assets/php/user.php" method="POST">
        <div class="inputBox2">
          <input type="text" name="username">
          <label for="">Nombre Usuario</label>
        </div>  
        <div class="inputBox2">
          <input type="password"name="pws">
          <label for="">Ingrese Contraseña</label>
        </div>
        <div class="inputBox2">
          <input type="password"name="pws">
          <label for="">Ingrese Contraseña Nuevamente</label>
        </div>
        <button type="button" class="btn btn-primary">Registrarte</button>
      </form>
    </div>        


</body>
</html>