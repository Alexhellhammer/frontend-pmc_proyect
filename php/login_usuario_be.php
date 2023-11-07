
<?php
    session_start();
    include 'conexion_be.php';
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena ='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0) {
        $usuario = mysqli_fetch_assoc($validar_login);
        $_SESSION['usuario'] = $usuario['nombre_completo'];
        header("location: ../index.php");
        exit();
    } else {
        echo '
            <script>
                alert("Usuario no existe, verifique los datos introducidos");
                window.location = "../registroeingreso.php";
            </script>
        ';
        exit();
    }
?>
