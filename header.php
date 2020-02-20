<?php
        
        $varsesion = isset($_SESSION['usuario']);
        if($varsesion){
            $varsesion = $_SESSION['usuario'];
        }else{
            
        }
    ?>
        
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
                <li><a href="index.php">INICIO</a></li>
                <li><a href="somos.php">QUIENES SOMOS</a></li>
                <li><a href="category.php">CATALOGO</a></li>
                <!--<li><a href="blog.php">BLOG</a></li>-->
                <li><a id="log" href="login.php">INICIAR SESION</a></li>
                <li id="indicador"><a id="exit" href="">INGRESADO</a>
                    <ul>
                        <li><a id="lg" href="./assets/php/close_ses.php">SALIR</a></li>
                    </ul></li>
           </ul>
       </nav>
    </div>
   
    <script type="text/javascript" >
        function loginTesting(){
            var tipo='<?php echo $varsesion?>';
            if(tipo =='usuario' || tipo =='admin'){
                document.getElementById('log').style.display='none';
                document.getElementById('indicador').style.display='block';
                    
            }else{
                document.getElementById('log').style.display='bloc';
                document.getElementById('indicador').style.display='none';
            

            }

        }
        </script>   
</header> 

