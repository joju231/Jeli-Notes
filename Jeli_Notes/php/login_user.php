<?php
    
    session_start();
    
    include 'conections.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conection, "SELECT * FROM usuarios WHERE email='$email'
    and contrasena='$password' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: ../products.php");
        exit;
    }else{
        echo '
            <script>
                alert("Email not found, check your email");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
    
?>