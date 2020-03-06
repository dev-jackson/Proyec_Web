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
   <?php
        setcookie("IP",$_SERVER['REMOTE_ADDR']);
        setcookie("SN",$_SERVER['SERVER_NAME']);
        setcookie("SP",$_SERVER['SERVER_PORT']);
        if(!empty($_SESSION)){
            if(isset($_SESSION["C"])){
               setcookie("NAME",$_SESSION["C"]);
            }elseif(isset($_SESSION["A"])){
                setcookie("NAME",$_SESSION["A"]);
            }
        }else{
            setcookie("NAME","GenericUser");
        }
   ?>
  <script src="assets/js/index.js"></script>
  <script>
      $(document).ready(function(){
          var dat={
            "IP":"<?php echo $_COOKIE["IP"];?>",
            "SN": "<?php echo $_COOKIE["SN"];?>",
            "SP": "<?php echo $_COOKIE["SP"];?>",
            "NAME": "<?php echo $_COOKIE["NAME"];?>"
          };
          console.log(dat);
          $.ajax({
              type:"POST",
              url:"index.php?c=User&a=verficarCookie",
              data: dat,
              success: function(d){
                  console.log(d);
                if(d==''){
                    swal({
                     closeOnClickOutside:false,
                     title: "Recomendacion",
                     text: "Permitir acceso a cookies para mejorar su experiencia",
                     icon: "warning",
                     buttons: {
                     si:{ 
                      text:"si",
                      value:"si"
                      },
                      no:{ 
                      text:"no",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {                                     
                case "si":
                    $.ajax({
                type:"POST",
                url:"index.php?c=User&a=guardarCookie",
                data: dat,
                success:function(data){
                }
            });     
                  break;
                case "no":
                               
                  break;
            }
          })
                }else{
                    console.log();
                }
              }
          });
        });
  </script>
</header> 

