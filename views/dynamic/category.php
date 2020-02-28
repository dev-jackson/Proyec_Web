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
        .grid{
        display: grid;
        grid-template-columns: repeat(4, 2fr);
        /*grid-template-columns: 1fr 1fr;*/
        grid-template-rows: 1fr 1fr;
    }
        
    </style>

    <title>Document</title>
</head>
<body onload="loginTesting2();">
<div class="main">
 
  <ul class="cards">
   
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./assets/img/ropahombre.png"></div>
        <div class="card_content">
          <h2 class="card_title">Descripcion de Sintomas</h2>
          <p class="card_text"><?php //echo $rs['observaciones']?>
          <p>Fecha: <?php //echo $rs['fecha'];?></p></p>
          <h5 >Estado:</h3>
        </div>
      </div>
    </li>
     
     
    </ul>
</div>

</body>        <script>
        function addCode(){
        var algo=" <li>"+
    "<div class='card'>"+
              "<img src='./assets/img/ropahombre.png' alt='Avatar' style='width:100%'>"+
               "<div class='container'>"+
                 "<h4><b>Ropa Hombre</b></h4>"+
                 "<p>Visualizar</p>"+
               "</div>"+
        "</div>"+
    "</li>"+
    "<li>"
    document.getElementById("add_after_me").insertAdjacentHTML("afterend",algo);
}  
function addCodeM(){
        var algo=" <li>"+
    "<div class='card'>"+
              "<img src='./assets/img/muestra2.png' alt='Avatar' style='width:100%'>"+
               "<div class='container'>"+
                 "<h4><b>Ropa Mujer</b></h4>"+
                 "<p>Visualizar</p>"+
               "</div>"+
        "</div>"+
    "</li>"+
    "<li>"
    document.getElementById("add_after_me_2").insertAdjacentHTML("afterend",algo);
}  
 </script>
 <script type="text/javascript" >
        function loginTesting2(){
            var tipo='<?php echo $varsesion?>';
            if(tipo =='admin'){
                document.getElementById('card-add').style.display='block';
                document.getElementById('log').style.display='none';
                document.getElementById('indicador').style.display='block';      
            }else{
               if(tipo=='usuario'){
                  document.getElementById('card-add').style.display='none';
                  document.getElementById('log').style.display='none';
                  document.getElementById('indicador').style.display='block';
               }else{

                document.getElementById('card-add').style.display='none';
                  document.getElementById('log').style.display='block';
                  document.getElementById('indicador').style.display='none';
               }
               
            }

        }
            
        </script>   
       <script type="text/javascript" src="./assets/js/index.js"></script>
</body>
</html>