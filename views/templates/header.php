<?php session_start();?>
        
       <header>
    <div class="pages-navigation">
       <div class="flex space-btw">
       <a href="index.php"><img class="imglogo" src="./assets/img/logo.png" alt="">
        <div class="isotipo flex-center"><h1 class="imgtitle" ></a></h1></div>
        <span id="menu-bars" class="hidden rith-y" onclick="toggle('#index-menu','active')"><i class="fas fa-bars"></i></span>
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
                <li><a href="index.php?c=User&a=showAllArticulos">CATALOGO</a></li>
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
   
    <script type="text/javascript" >
     
        </script>   
</header> 

