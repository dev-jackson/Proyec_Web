<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Styles -->
	<!-- bootstrap cdn-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/cat.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
        
        $varsesion = isset($_SESSION['usuario']);
        if($varsesion){
            $varsesion = $_SESSION['usuario'];
        }else{
            
        }
    ?>
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
        
    </style>
    <?php 
      include_once("./assets/php/init_sest.php")
    ?>
    <title>Document</title>
</head>
<body onload="loginTesting2();">
<div class="global-container">
    <?php include("header.php");?>
    <div class="contenedor">
        <div class="contenido-one" >
            <ul>
                <li><h3>Opciones</h3></li>
                
                <li><a href="#" onclick="showHombre();">HOMBRES</a></li>
                <li><a href="#" onclick="showMujer();">MUJERES</a></li>
            </ul>
        </div>
        <div class="contenido-two" id="setHombre" >
            <ul >
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/ropahombre.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <h1 id="add_after_me"></h1>
                <li>
                <div class="card-add" id="card-add" onclick="addCode()">
                          <div class="addContaniner">
                          <img class="igmadd" src="./assets/img/plus.png" alt="">
                          </div>
                          
                    </div>
                </li>
               
               <!--- <li><button>ADD</button></li>--->
            </ul>
        </div>
        <div class="contenido-two" id="setMujer" style="display:none;">
            <ul >
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Hombre</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra2.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                
                <div class="card ">
                           <img src="./assets/img/muestra1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <li>
                <div class="card ">
                           <img src="./assets/img/muestra4.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
                             <p>Visualizar</p>
                           </div>
                    </div>
                </li>
                <h1 id="add_after_me_2"></h1>
                <li>
                <div class="card-add" id="card-add" onclick="addCodeM()">
                          <div class="addContaniner">
                          <img class="igmadd" src="./assets/img/plus.png" alt="">
                          </div>
                          
                    </div>
                </li>
               
               <!--- <li><button>ADD</button></li>--->
            </ul>
        </div>
	    <div class="ventana_flotante">
<!--Aqui el Codigo-->
        <h1>asfgadgasfas</h1>
    </div>
    
    
    </div>
    <?php include("footer.html");   ?>
</div>
        <script>
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