<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    
</head>
<body background="./assets/img/fondo_login.jfif">
<div class="box">
      <img src="./assets/img/logo.png" alt="" class="imglogo">
      <form action="./assets/php/user.php" method="POST">
        <div class="inputBox">
          <input type="text" name="username">
          <label for="">Username</label>
        </div>  
        <div class="inputBox">
          <input type="password"name="pws">
          <label for="">Contraseña</label>
        </div>
        <button type="submit" class="btn btn-primary" >Entrar</button>
        <button type="button" class="btn btn-secondary"><a style="color:#fff; text-decoration:none;" href="registrar.php">Registro</a></button>
      </form>
    </div>        


</body>
</html>
	
	