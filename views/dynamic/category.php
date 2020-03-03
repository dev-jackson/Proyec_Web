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

    }
        
    </style>

    <title>Document</title>
</head>
<body >
<div class="main2">
 
  <ul class="cards">
   <?php foreach($res as $r):?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img height="70px" src="data:image/png;base64,'<?php echo base64_encode($r["imagen"]);?>'"></div>
        <div class="card_content">
          <h2 class="card_title">Descripcion</h2>
          <p class="card_text"><?php //echo $rs['observaciones']?>
          <p>Fecha: <?php //echo $rs['fecha'];?></p></p>
          <h5 >Estado:</h3>
        </div>
      </div>
    </li>
  <?php 
endforeach;?>
     
    </ul>
</div>
  <a href="index.php?a=dynamic&p=CrearArticulo">Ir</a>    
</body>
</html>