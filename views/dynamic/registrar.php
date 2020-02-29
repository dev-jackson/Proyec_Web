<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registor</title>
</head>
<body>
<div class="box2">
      <img src="./assets/img/logo.png" alt="" class="imglogo">
      <form action="javascript:void(0)" method="POST" class="fromRegister">
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
        
        <button type="submit" class="btn btn-primary" id="btnRegistro">Registrarte</button>
      </form>
    </div>        


</body>
<script type="text/javascript">
  $(document).ready(function($){
    $(".fromRegister").submit(function(e){
      $.ajax({
        type: "POST",
        url: "",
        data: $(this).serialize(),
        success: function(data){

        }
      });
    });
  });
</script>
</html>