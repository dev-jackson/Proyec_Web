<?php session_start();?>

    <style>
        .menu1{
            margin:25px;
            width: 50px; height: 25px;
            border-radius:none;
            float:right;
        }
        @media(min-width:780px){
            .menu1{
            display:none;
            }
        }
    </style>
       <header >
       <div class="pages-navigation">
       <div class="flex space-btw">
       <img  onclick="toggle('#index-menu','active');" class="menu1" src="assets/img/menu.png">
       <a href="#"><img class="imglogo" src="./assets/img/logo.png" alt=""></a>
        <div class="isotipo flex-center"><h1 class="imgtitle" ></a></h1></div>
        <span id="menu-bars" class="hidden rith-y" onclick="toggle('#index-menu','active');"><i class="fas fa-bars"><img src="assets/img/menu.png" alt="" srcset=""></i></span>
    </div>
    
       <nav id="index-menu" class="menu font-p-h">
           <ul class="">
           <style>
           #indicador #exit{
            color: red;
           }
           #indicador ul{
            min-width:140px;
            display:none;
            position:absolute;
           }
           #indicador:hover >ul{
                
               display:block;
           }</style>
                <li><a href="index.php?">INICIO</a></li>
                <li><a href="index.php?a=static&p=somos">QUIENES SOMOS</a></li>
                <li><a href="index.php?c=User&a=showAllArticulosH">CATALOGO</a></li>
                <li><?php
                    if(!empty($_SESSION)){
                        if(isset($_SESSION['C'])){
                            echo "<li><a href=index.php?c=Client&a=AllDeseos&name=".$_SESSION['C'].">MIS DESEOS</a></li>";
                        }elseif(isset($_SESSION['A'])){
                            echo "<li><a href=index.php?a=dynamic&p=tableUser>USUARIOS</a></li>";
                        }
                    }
                ?></li>
                <!--<li><a href="blog.php">BLOG</a></li>-->
               
                <li> <?php
                    if(empty($_SESSION)){
                        echo "<a id='log' href='index.php?a=dynamic&p=login'>INICIAR SESION</a>";
                    }elseif(isset($_SESSION['C'])){
                        echo "<a id='exit' onclick='cerrar();'>".$_SESSION['C']."</a>";
                    }else{
                        echo "<a id='exit'  onclick='cerrar();'> ".$_SESSION['A']."(Adm)</a>";
                    }
                ?></li>
                <!--<li id="indicador"><a id="exit" href="">INGRESADO</a>
                    <ul>
                        <li><a id="lg" href="./assets/php/close_ses.php">SALIR</a></li>
                    </ul></li>-->
           </ul>
       </nav>
    </div>
   
  <script src="assets/js/index.js"></script>
</header> 

