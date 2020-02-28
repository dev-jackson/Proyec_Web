
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
	<!-- bootstrap cdn-->

    <title>Mell Fashion Shop</title>

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
</head>
<body onload="loginTesting();">
    <div class="global-container">
        
        <div class="sect-1" style="background-image: url('./assets/img/fondo3.png');">
            <h1>LA MEJOR TIENDA DE ROPA</h1>
                
            <div class="slider">
                <ul >
              <li><img src="./assets/img/muestra1.png" alt=""></li>
              <li><img src="./assets/img/muestra2.png" alt=""></li>
              <li><img src="./assets/img/muestra3.jfif" alt=""></li>
              <li><img src="./assets/img/muestra4.png" alt=""></li>
              <li><img src="./assets/img/muestra5.jpg" alt=""></li>
            </ul>
             </div>
        </div>
           <div class="categ">
                   <h1>CATEGORIAS</h1>
                   <ul>
                   <li><div class="card ">
                           <img src="./assets/img/ropamujer1.png" alt="Avatar" style="width:100%">
                           <div class="container">
                             <h4><b>Ropa Mujer</b></h4>
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
                  
               </ul>   
           </div>
           
   <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>