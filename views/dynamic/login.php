<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <style>
    .btn_submit{
        background-color:#5499C7;
        border:none;
        padding:8px;
        border-radius:5px;
        color:white;
      }
      .btn_submit:hover{
        background-color:#2471A3;
      }
      .btn_scon{
        background-color:#CD6155;
        border:none;
        padding:8px;
        border-radius:5px;
        color:white;
      }
      .btn_scon:hover{
        background-color:#A93226 ;
      }
    </style>
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
        <button type="submit" class="btn_submit" >Entrar</button>
        <button type="button" class="btn_scon"><a style="color:#fff; text-decoration:none;" href="index.php?a=dynamic&p=registrar">Registro</a></button>
      </form>
    </div>        


</body>
</html>
	
	