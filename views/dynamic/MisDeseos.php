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
          <p>Fecha: <?php //echo $rs['fecha'];?></p></p>
          <h5 >Operacion:</h3>
          <?php
             if(!empty($_SESSION)){
              if(isset($_SESSION['A'])){
                echo "<button id='Eliminar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_genero']." ".$r['id_tipo']."'>Eliminar</button>";
                echo "<a id='Actualizar' class='btn card_btn' href='index.php?c=Admin&a=UpdateArticulo&id_art=".$r['id_articulo']."' >Actualizar</a>";
              }elseif($_SESSION['C']){
                echo "<button id='Agregar' class='btn card_btn' name='subject' type='submit' value='".$r['id_articulo']." ".$r['id_usuario']."' >Aregar a Deseos</button>";
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
</html>