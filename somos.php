<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mell Fashion Shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Styles -->
	<!-- bootstrap cdn-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
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
      include_once("./assets/php/init_sest.php");
    ?>
</head>
<body onload="loginTesting();">
    <div class="global-container"><header>
        <?php include("header.php") ?>
       <div class="section-somos">
            <div class="content1">
                <h1>UNA TIENDA PENSADA PARA TI!</h1>
                <p>Mona de Closet© es la primera tienda online femenina donde puedes conseguir prendas de vestir y accesorios de gran calidad, desde hace poco estamos trabajando con diseñadores y artesanos Ecuatorianos impulsando junto a ellos el comercio electrónico de Ecuador.</p>
                <p>Entendemos en gran medida el problema que significa poder encontrar una tienda virtual donde comprar lo que te gusta, y que te llegue hasta el lugar que deseas, sin correr el riesgo de que te estafen. Lo hemos pasado, para ello estamos aquí.</p>
                <p> Queremos que tu experiencia de compra sea fácil, rápida, segura y sobre todo satisfactoria.

                <p>Te invitamos a que pases con regularidad por esta esquina digital, mires los escaparates y aproveches las promociones en descuentos que ofrecemos con bastante frecuencia, pilas!</p>
                    <h2>LO DIGITAL ES HOY!</h2>
                    <hr>
                <p>Procuramos ser muy cuidadosos en el tratamiento de los datos personales que compartes en este sitio, no son compartidos con nadie y el uso de los mismos solo es para hacerte llegar las mejores ofertas de manera personalizada.</p>
                <p>Nuestro sitio cuenta con certificado de seguridad SSL (te preguntarás que será eso?  no es otra cosa que un protocolo de seguridad que hace que tus datos viajen de manera integra y segura, tal cual como tienen los bancos). Lo compruebas viendo un candadito verde en la parte superior de tu barra de navegación.. (lo viste no!.. ok continuemos )</p>
                    <p>Nos obsesiona acortar los tiempos de entrega de lo que compres. En 24/72hrs dependiendo de donde vivas puedes tener tu compra en casa (o bien donde desees recibirlo).</p>
                    <h2>YUHU! ESTAMOS AQUÍ</h2>
                    <hr>
                    <p>No pienses que por ser una tienda online no hay gente, del otro lado de tu pantalla hay gente dando respuestas y atendiendo a cada persona que necesita asistencia, velando para que la experiencia de compra te resulte plenamente satisfactoria. Queremos ser transparentes, así que si tienes dudas, necesitas información sobre el servicio, o quieres detalles sobre el envío o el producto, escríbenos a: ventas@mellshop.com</p>
            </div>
       </div>
    </header>
     <?php include("footer.html") ?>
</div>
    
    <script src="./assets/js/index.js"></script>
</body>
</html>