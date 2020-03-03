<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    ?>
<body>
    <div style="margin:100px;">
        <form action="javascript:void(0);" method="post" enctype="multipart/form-data" id="addArticulo">
            <input type="file" name="imagen" id="imagen">
            <input type="submit" name="save">
        </form>
    </div>
</body>
    <script>
        $(document).ready(function($){
            $("#addArticulo").submit(function(e){
                console.log('<?php print_r($_FILES);?>');
            });
        });
    </script>
</html>