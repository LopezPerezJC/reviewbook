<?php
    //conexion con la base de datos y el servidor
    $link=mysqli_connect("127.0.0.1","root","") or die("<h2>el servidor no se ha encontrado</h2>");
    $db = mysqli_select_db($link,"datosformulario") or die("error de conexion");

    //obtenemos los valores del formulario
    $nombre = $_POST["nombreUsuario"];
    $email = $_POST["correo"];
    $pass = $_POST["contrasenia"];

    //obtiene la longitud de un string
    $req = (strlen($nombre)*strlen($email)*strlen($pass)) or die("no se han llenado todos los campos");

    //se encripta contraseña
    $contrasenia = md5($pass);

    //ingresar la informacion a la tabla de datos
    mysqli_query($link,"INSERT INTO usuarios VALUES('$nombre','$email','$contrasenia')") or die("error de envio");

    echo '      
        <meta http-equiv="refresh" content="0;url=/html/msj-confirmar.html">
    ';
    ?>