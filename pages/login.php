<?php 
    include 'conexion.php';
    $dni = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $sql = "SELECT * FROM usuarios WHERE dni='$dni' contraseña='contraseña'";
    $login = mysqli_query($conexion, $sql);
    if($login && mysqli_num_rows($login) == 1){  

        header("Location: https://app-genesis.herokuapp.com/pages/tables.php");
        exit;
        echo "datos correctos";
    }else{

        header("Location: https://app-genesis.herokuapp.com/sign-in.php");
        echo "ERROR".mysqli_error($conexion);
        exit;
    }
?>
