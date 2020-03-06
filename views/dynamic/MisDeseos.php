<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .imglogo{
            height: 80px;
            width: 220px;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
            color: #fff;
        }
        li{
            list-style: none;
        }
      .nav-menuc{
        padding:20px;
      }
      nav{
        text-align: center;
      }
      nav>a{  
        height: 40px;
        padding:10px 50px;
        width:15%;
        font-size:20px;
        border-radius:5px;
      }
      nav >a:hover{
        background:red;
      }
      .nav-menuc >.btn-primary{
        padding:10px;
        
        background:#2874A6;
        color:white;
        border-radius:10px;
      }  
    </style>
</head>
<body>
<div class="main2">
  
  <ul class="cards">
   <?php foreach($result as $r):?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img width="100%" src='<?php echo $r["imagen"];?>'></div>
        <div class="card_content">
          <h2 class="card_title">Descripcion</h2>
          <p class="card_text"><?php echo $r['descripcion'];?>
          <p>Costo <?php echo $r['costo'];?></p></p>
          <?php
             if(!empty($_SESSION)){
              if(isset($_SESSION['A'])){
                //echo "<button id='Eliminar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_genero']." ".$r['id_tipo']."'>Eliminar</button>";
                echo "<a id='Actualizar' class='btn card_btn' href='index.php?c=Admin&a=UpdateArticulo&id_art=".$r['id_articulo']."' >Actualizar</a>";
              }elseif($_SESSION['C']){
                echo "<button id='Eliminar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_usuario']." ".$_SESSION['C']."' >Eliminar Deseo</button>";
              }
          }
             //echo "<a class='btn card_btn' href='index.php?c=Admin&a=updateEstado&es=R'>Rechazar</a>";
          ?>
        </div>
      </div>
    </li>
  <?php 
endforeach;?> </ul>
</div>    
</body>
<script>
$(document).on("click","#Eliminar",function(){
            swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de Eliminar Articulo",
                     icon: "warning",
                     buttons: {
                     si:{ 
                      text:"SI",
                      value:"si"
                      },
                      no:{ 
                      text:"NO",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {                                     
                case "si":
                  var cadena=$("#Eliminar").val().split(" ",3);
                var date={
                  "id_art": cadena[0],
                  "id_usuario": cadena[1],
                };
                $.ajax({
                    type:"POST",
                    url: "index.php?c=Client&a=deleteDeseo",
                    data: date,
                    //dataType:"json",
                    success: function(data){
                        if(data){
                            swal("Articulo Eliminado","Correcto","success");
                            setTimeout(() => {
                            window.location.href="index.php?c=Client&a=AllDeseos&name="+cadena[2];
                            }, 1500);
                            console.log(data);
                        }else{
                          console.log(data);
                            swal("Usuario no Creado","Articulo Erroneo",'error')
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log(textStatus);
                        console.log(errorThrown);
                    }
                });    
                  break;
                case "no":
                               
                  break;
            }
          });
            });

</script>
</html>