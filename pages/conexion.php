<?php
$conexion = mysqli_connect("dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "ycxnuwhxu1mmnnkf", "c0jppu3fs57blhf1", "alcmzlhzcq0iqmyq");
if(mysqli_connect_error()){
    echo "La conexión a la base de datos sql ha fallado: ".mysqli_connect_error();
}else{
   /* echo "La conexion ha sido exitosa";*/
}

mysqli_query($conexion, "SET NAMES 'utf8'");


/*$conexion = mysqli_connect("dcrhg4kh56j13bnu.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "ycxnuwhxu1mmnnkf", "c0jppu3fs57blhf1", "alcmzlhzcq0iqmyq");
if(mysqli_connect_error()){
    echo "La conexión a la base de datos sql ha fallado: ".mysqli_connect_error();
}else{
    echo "La conexion ha sido exitosa";
}   
mysqli_query($conexion, "SET NAMES 'utf8'");*/

?>
