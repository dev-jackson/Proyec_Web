<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.btn-enviar{
    padding:10px;
    color:white;
    background:teal;
    border:none;
    margin:10px;
    border-radius:10px;
}
.inputFile {
    margin:15px;
    border:1px #BDC3C7 solid;
    border-radius:5px;
    padding:10px;
    width:96%;
}
.body-upload{
    float:right;
    width:80%;
    display: block;
    flex-wrap: wrap;
    align-content: center;
    text-align: center;
    padding: 40px 55px  ;
    margin: auto;
    }
#imgLogoAr{
    width:175px;
    height:100px;
}
#blah{
    width:200px;
    height:210px;
}
</style>
</head>
<?php 
       // echo '<pre>';
       // print_r($_FILES);
       // echo '</pre>';
    ?>
<body style="background:white;">

    <div class="body-upload">
        <form class="form form-vertical" enctype="multipart/form-data" id="addArticulo">
            <div class="col-sm-8">
            <img src="assets/img/logo.png" alt="" srcset="" id="imgLogoAr">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="text">Descripcion<span class="kv-reqd">*</span></label>
                        <input type="text" class="form-control" name="descript" id="descript" value="<?php echo $res['descripcion'];?>" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pwd">Valor<span class="kv-reqd">*</span></label>
                        <input type="number" class="form-control" name="costo" value="<?php echo $res['costo'];?>" required>
                    </div>
                </div>
            </div>
    
            <div class="row">
            <div class="col-sm-6">
            <label for="">Para:</label>
            <p>
        <input type="radio" id="test1" name="radio-group" value="Hombre" checked>
        <label for="test1">Hombre</label>
        </p>
        <p>
        <input type="radio" id="test2" name="radio-group" value="Mujer">
            <label for="test2">Mujer</label>
        </p>
        
            </div>
            <div class="col-sm-6" >
            <label for="">Tipo:</label>
            <p>
        <input type="radio" id="test1" name="radio-group1" value="Ropa" checked>
        <label for="test1">Ropa</label>
        </p>
        <p>
        <input type="radio" id="test2" name="radio-group1" value="Accesorio">
            <label for="test2">Accesorio</label>
        </p>
            </div>
            <div class="row">
            <span>Selecione Nuevamente</span>
                <input type='file' class="inputFile" name="imagen"  id="imagen" required/>
                <img id="blah" src="<?php echo $res['imagen'];?>" width="200px"/>
                </div>
                    <button type="submit" name="save" class="btn-enviar">Subir Articulo</button>
                </div>
            </div>
        </div>
    </div>
    
           <!-- <input type="file" name="imagen" id="imagen">
            <input type="submit" name="save">
            <input type="text" name="descript" id="descript">
            <input type="text" name="costo" id="costo">--->
        </form>
 
<!-- markup -->
<!-- note: your server code `/site/avatar_upload/2` will receive `$_FILES['avatar-2']` on form submission -->
<!-- the avatar markup -->
 
    </div>
</body>
    <script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imagen").change(function() {
  readURL(this);
});
        $(document).ready(function(e){
            $("#addArticulo").on('submit',function(e){
                //console.log();
                e.preventDefault();
                $.ajax({
                    type:"POST",
                    url: "index.php?c=Admin&a=AddArticulo",
                    data: new FormData(this),
                    //dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(data){
                        if(data){
                            swal("Articulo Agragegado","Correcto","success");
                            setTimeout(() => {
                            window.location.href="index.php?c=User&a=showAllArticulosH"
                            }, 1500);
                        }else{
                            swal("Usuario no Creado","Articulo Erroneo",'error')
                        }
                    }
                });
            });
        });
    </script>
</html>