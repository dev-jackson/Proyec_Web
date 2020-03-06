
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
        .cat {
      list-style-type: none;
      margin: 0;
      padding: 0;
      }
      .cat li {
        text-align: center;
}
      .cat li a{
        align-content:center;
        display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
  @media(min-width:780px){
    #sld{
      width:20%;
    }
  }
    </style>

</head>
<body   >
    <div class="global-container">
        
        <div class="sect-1" style="background-image: url('./assets/img/fondo3.png');">
            <h1 style="font-size:3em;">LA MEJOR TIENDA DE ROPA</h1>
                
            <div class="slider" id="sld">
                <ul >
              <li><img src="./assets/img/muestra1.png" alt=""></li>
              <li><img src="./assets/img/muestra2.png" alt=""></li>
              <li><img src="./assets/img/muestra3.jfif" alt=""></li>
              <li><img src="./assets/img/muestra4.png" alt=""></li>
              <li><img src="./assets/img/muestra5.jpg" alt=""></li>
            </ul>
             </div>
        </div>
        <h1 style="font-size:2em;">Categorias</h1>
        <ul class="cat">
  <li><a href="index.php?c=User&a=showAllArticulosM">
    <div class="container_img" >
      <hr>
    <h2>Ropa Mujer</h2>
        <img src="assets/img/ropamujer1.png" alt="" srcset="" style="border-radius:10px; border:1px black solid; width:20%; height:50%;">
    </div>
  </a></li>
  <li><a href="index.php?c=User&a=showAllArticulosH"><div class="container_img" >
      <hr>
    <h2>Ropa Hombre</h2>
        <img src="assets/img/ropahombre.png" alt="" srcset="" style="border-radius:10px; border:1px black solid; width:20%;height:50%;">
    </div></a></li>
</ul>
    </div>
</body>
</html>