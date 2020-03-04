  <!-- footer -->
  
  <footer class="txt-white font-p-h">
    <div class="ft container">
        <div class="info ft_" >
            <div class="_head">
                <h2 class="tittle">Información</h2>
            </div>
            <div class="_body">
                <ul class="l-s-none">
                    <li>Ecuador</li>
                    <li>Guayaquil</li>
                </ul>
            </div>
        </div>
        <div class="contact ft_">
            <div class="_head"><h2 class="tittle">Enviar consulta</h2></div>
            <div class="_body">
                <form class="flex-y center" method="get" accept-charset="utf-8">
                    <input type="text" name="name" placeholder="Su nombre" required/>
                    <input type="email" name="email" placeholder="su email" required/>
                    <textarea name="query" id="query" cols="30" rows="4" placeholder="Escriba su mensaje."></textarea>
                    <input class="button-1 btn-green" type="submit">
                </form>
            </div>
        </div>
        <div class="ft_">
            <div class="_head"><h2 class="tittle">Contacto</h2></div>
            <div class="_body">
                <ul class="l-s-none">
                    <li>Correo: <a style="color: #fff;" href="mailto:melanieo@gmail.com">MellShop@gmail.com</a ></li>
                    <li>Pagina Creadores:<a href="creadores.html" style="color:#fff;"> Ver Información</a></li>
                    <li>Número de celular: +593 993421833</li>
                </ul>
            </div>
        </div>
    </div>
    
</footer>
<script>
    function cerrar(){
         swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de cerrar Sesion",
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
                           window.location.href ="index.php?c=User&a=destroySession";    
                  break;
                case "no":
                               
                  break;
            }
          })
    }
</script>