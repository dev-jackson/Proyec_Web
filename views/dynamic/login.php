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
      <form action="javascript:void(0);" method="POST" class="fromLogin">
        <div class="inputBox">
           <span id="mensaje" style="float: right;"></span>
          <input type="text" name="uname" id="uname" maxlength="10" onkeypress="return justNumbers(event);">
          <label for="">Username(CI)</label>
        </div>  
        <div class="inputBox">
          <input type="password" name="pws" id="pws">
          <label for="">Contraseña</label>
        </div>
        <button type="submit" class="btn_submit" >Entrar</button>
        <button type="button" class="btn_scon"><a style="color:#fff; text-decoration:none;" href="index.php?a=dynamic&p=registrar">Registro</a></button>
      </form>
    </div>        


</body>

<script>
function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
        return /\d/.test(String.fromCharCode(keynum));
        }

$('body').on('keyup', '#uname', function(){
  var Cedula = this.value;

  // Aqui esta el patron(expresion regular) a buscar en el input
  patroncedula = /^([0-9]{10})$/;
  
  if( patroncedula.test(Cedula) )
  {
    $('#mensaje').text('Formato correcto!');
    $('#mensaje').css({"color":"green"})
    $('#ingresar').attr('disabled',false);


  }
  else if(Cedula==''){
  	$('#mensaje').text('');
    $('#ingresar').attr('disabled',false);
  }

  else
  {
     $('#mensaje').text('Formato incorrecto');
     $('#mensaje').css({"color":"red"})
     $('#ingresar').attr('disabled',true);

  }
});
<?php session_status();?>
  $(document).ready(function(){
    $(".fromLogin").submit(function(e){  
      var ci=$("#uname").val();
      var pass=$("#pws").val();
      if(ci==''||pass==''){
        swal("Debe llenar todos los campos","Se requieren llenar campos", "info")
      }else{
        $.ajax({
          type:"POST",
          url:"index.php?c=User&a=login",
          data:new FormData(this),
          cache:false,
          contentType: false,
                    cache: false,
                    processData:false,
          success: function(respuesta){
            if(respuesta.trim()=== 't'){
              swal("Bienvenido","Inicio de Session Exitoso!","success");
              setTimeout(() => {
                window.location.href="index.php?";
              }, 1500);
              }else{
                swal("Error","Credenciales no Encontradas!","error");
                setTimeout(() => {
                  window.location.href="index.php?a=dynamic&p=login";
                }, 1500);
            } 
          },
          error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
        });
      }
      
    });
  });
</script>
</html>
	
	