<?php

    include 'conections.php';

    $conection = mysqli_connect("localhost", "root", "", "jeli_labs_login-register");
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //password encryptation
    //$password = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(username, email, contrasena) 
              VALUES('$username', '$email', '$password')"; 
   
   
   
   //Verificar que el email no es repeteixi

    $verificar_correo = mysqli_query($conection, "SELECT * FROM usuarios WHERE email='$email'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("This email is already registered. Try a different one.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    //Verificar que el username no es repeteixi

    $verificar_username = mysqli_query($conection, "SELECT * FROM usuarios WHERE username='$username'");

    if(mysqli_num_rows($verificar_username) > 0){
        echo '
            <script>
                alert("This username is already registered. Try a different one.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conection, $query);

    if ($ejecutar){
         echo '
            <script>
                alert("Register completed successfully");
                window.location = "../index.php";
            </script>
         ';
    }else{
        echo '
            <script>
                alert("Something went wrong. Try again");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conection);
