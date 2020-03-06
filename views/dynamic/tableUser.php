<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .imglogo{
            height:80px;
            width:60%;
        }
    </style>
 </head>
 <body>
  <div style="width:100%; padding:1% 5%;">
  <?php echo $_SERVER['REMOTE_ADDR'];?>
   <br />
   <h2 align="center">Usuarios</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Buscador</span>
     <input type="text" name="search_text" id="search_text" placeholder="Buscar por todos los campos" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
</div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"index.php?c=Admin&a=showUsers",
   type:"POST",
   data:{"query":query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>