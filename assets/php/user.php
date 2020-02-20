<?php
    session_start();
    $user = $_POST["username"];
    $password = $_POST["pws"];
        if (($user == "usuario") && ($password == "12345")) {
          $_SESSION['usuario'] = $user;
          header('Location: /Proyect_Web/index.php');
        } else {
          if(($user == "admin") && ($password == "12345")){
            $_SESSION['usuario'] = $user;
            header('Location: /Proyect_Web/index.php');
          }else{
            echo "¡Usuario o contraseña incorrectos!";
          }
        }
?>