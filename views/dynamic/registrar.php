<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registor</title>
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
      span.psw {
  float: right;
   padding-top: 0;
   font-size:10px;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    </style>
</head>
<body background="./assets/img/fondo_login.jfif">
<div class="box2">
      <img src="./assets/img/logo.png" alt="" class="imglogo2">
      <form action="javascript:void(0)" method="POST" class="fromRegister">
      <span id="mensaje" style="float: right; font-size:10px;"></span>
        <div class="inputBox2">
          <input type="text" name="username" placeholder="Ingrese CI" id="uname" onkeypress="return justNumbers(event)" maxlength="10">
          <label for="">Nombre Usuario</label>
        </div>  
        <div class="inputBox2">
          <input type="text" name="nombre" placeholder="Ingrese Nombre" id="nombre" onkeypress="return justLetters(event)" onKeyUp="this.value=this.value.toUpperCase();">
          <label for="">Ingrese Nombre y Apellido</label>
        </div>
        <div class="inputBox2">
          <input type="text" name="apellido" placeholder="Ingrese Apellido" id="apellido" onkeypress="return justLetters(event)"onKeyUp="this.value=this.value.toUpperCase();">
          <label for="">Ingrese Apellido</label>
        </div>
        <div class="inputBox2">
          <input type="password"name="pws" placeholder="Ingrese Contrseña" id="pws">
          <label for="">Ingrese Contraseña </label>
        </div>
        <div id="msgerror"></div>  
        <button type="submit" class="btn_submit" id="btnRegistro">Registrarte</button>
      </form>
    </div>        


</body>
<script type="text/javascript">
$('body').on('keyup', '#uname', function(){
  var Cedula = this.value;

  // Aqui esta el patron(expresion regular) a buscar en el input
  patroncedula = /^([0-9]{10})$/;
  
  if( patroncedula.test(Cedula) )
  {
    $('#mensaje').text('Formato correcto!');
    $('#mensaje').css({"color":"green"})
    $('#btnRegistro').attr('disabled',false);
    //validateExisUser();

  }
  else if(Cedula==''){
  	$('#mensaje').text('');
    $('#btnRegistro').attr('disabled',false);
  }

  else
  {
     $('#mensaje').text('Formato incorrecto');
     $('#mensaje').css({"color":"red"})
     $('#btnRegistro').attr('disabled',true);
     clear();

  }
});
function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
        return /\d/.test(String.fromCharCode(keynum));
        }
function justLetters(e){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true;
  patron =/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
  te = String.fromCharCode(tecla);
  return patron.test(te);
}

  $(document).ready(function($){
    $(".fromRegister").submit(function(e){
      var ci=$("#uname").val();
      var nombre=$("#nombre").val();
      var apellido=$("#apellido").val();
      var pws=$("#pws").val();
      if(ci==''||nombre==''||apellido==''||pws==''){
        swal("Debe llenar todos los campos","Se requieren llenar campos", "info");
      }else{
        $.ajax({
        type: "POST",
        url: "index.php?c=User&a=registerUser",
        data: $(this).serialize(),
        success: function(data){
          if(data){
            console.log(data);
              swal("Usuario Creado","Usuario Validado","success");
              setTimeout(() => {
                window.location.href="index.php?";
              }, 1500);
          }else{
            console.log(data);
            swal("Error a crear usuario","Usuario no Creado",'error');
          }
        }
      });
      }
    });
  });
  function validateExisUser(){
    var ci= $("#uname").val();
    var dataString = "username="+ci;
    $.ajax({
        type:"POST",
        url: "index.php?c=User&a=login",
        data: dataString,
        cache: false,
        success: function(data){
            if(data!="e"){
              console.log(data);
            }else{
                console.log(data);
                $("#registro").val("Registro");
                $("#msgerror").html("<span style='color:#cc0000'>Error:</span> Usuario ya existe. "+data+"");
                $('#ingresar').attr('disabled',false);
            }
        }
    });
}
function clear(){
    $("#msgerror").html("<span></span>");
}	
</script>
</html>