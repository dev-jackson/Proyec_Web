<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
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

    <title>Document</title>
</head>
<body >
<div class="main2">
  <div class="nav-menuc">
    <nav>
    <a href="index.php?c=User&a=showAllArticulosH" >HOMBRES</a>
    <a href="index.php?c=User&a=showAllArticulosM" style="border-bottom:3px red solid;">MUJERES</a>
    </nav>
    <?php 
        if(!empty($_SESSION)){
            if(isset($_SESSION['A'])){
              echo "<a class='btn btn-primary btn-sm float-right' href='index.php?a=dynamic&p=CrearArticulo'>Agregar Nuevo Articulo </a>";
            }
        }
    ?>
  </div>
  <ul class="cards">
   <?php foreach($res as $r):?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img width="100%" src='<?php echo $r["imagen"];?>'></div>
        <div class="card_content">
          <h2 class="card_title">Descripcion</h2>
          <p class="card_text"><?php echo $r['descripcion'];?>
          <p>Costo: <?php  echo $r['costo'];?></p></p>
          <h5 >Operacion:</h3>
          <?php
          if(!empty($_SESSION)){
              if(isset($_SESSION['A'])){
                echo "<button id='Eliminar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_genero']." ".$r['id_tipo']."'>Eliminar</button>";
                echo "<button id='Actualizar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_genero']." ".$r['id_tipo']."'>Actualizar</button>";
              }elseif(isset($_SESSION['C'])){
                echo "<button id='Agregar'  class='btn card_btn'  value='".$r['id_articulo']." ".$_SESSION['C']." ".$r['id_tipo']."'>Aregar a Deseos</button>";
              }
          }
             //echo "<a class='btn card_btn' href='index.php?c=Admin&a=updateEstado&es=R'>Rechazar</a>";
          ?>
        </div>
      </div>
    </li>
  <?php 
endforeach;?>
     
    </ul>
</div>    
</body>
<script>
$(document).on("click","#Agregar",function(){
            /*$("#Eliminar").on('click',function(e){
                //console.log();
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
                  id_art: cadena[0],
                  id_ge: cadena[1],
                  id_tipo: cadena[2]
                };
                $.ajax({
                    type:"POST",
                    url: "index.php?c=Admin&a=deleteArticulo",
                    data: date,
                    dataType:"json",
                    success: function(data){
                        if(data){
                            swal("Articulo Eliminado","Correcto","success");
                            setTimeout(() => {
                            window.location.href="index.php?c=User&a=showAllArticulosH"
                            }, 1500);
                            console.log(data);
                        }else{
                            swal("Usuario no Creado","Articulo Erroneo",'error')
                        }
                    }
                });    
                  break;
                case "no":
                               
                  break;
            }
          });
            });*/
           
            swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de Agregar Deseo?",
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
                var cadena=this.value.split(" ",3);
                var date={
                  "id_art": cadena[0],
                  "name": cadena[1]
                };
                $.ajax({
                    type:"POST",
                    url: "index.php?c=Client&a=AgregarDeseos",
                    data: date,
                    success: function(data){
                        if(data){
                            swal("Articulo Agregado a Deseos","Correcto","success");
                            setTimeout(() => {
                            window.location.href="index.php?c=User&a=showAllArticulosH"
                            }, 1500);
                        }else{
                            swal("Articulo no Agregado a Deseos","Articulo Erroneo",'error');
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
        //function add(){
           
        //}
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
                  id_art: cadena[0],
                  id_ge: cadena[1],
                  id_tipo: cadena[2]
                };
                $.ajax({
                    type:"POST",
                    url: "index.php?c=Admin&a=deleteArticulo",
                    data: date,
                    dataType:"json",
                    success: function(data){
                        if(data){
                            swal("Articulo Eliminado","Correcto","success");
                            setTimeout(() => {
                            window.location.href="index.php?c=User&a=showAllArticulosH"
                            }, 1500);
                            console.log(data);
                        }else{
                            swal("Usuario no Creado","Articulo Erroneo",'error')
                        }
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