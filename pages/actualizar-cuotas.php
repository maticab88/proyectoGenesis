<?php
        include 'conexion.php';
        include 'menu.php';
        $cuota =  $_POST['cuota'];
        $solicitud = $_POST['Solicitud'];
        $sellado = $_POST['sellado'];
        $seguro = $_POST['seguro'];
        $observaciones = $_POST['observaciones'];
        $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");  
        $pagos = mysqli_fetch_assoc($query2);
        $total = $pagos['Total'];

        mysqli_query($conexion, "SET NAMES 'utf8'"); 
        
        $SeguroD = $sellado + $seguro;
        $total = $total + $seguro;
        $sql = "UPDATE pagos SET Sellado='$SeguroD', Total='$total', Observaciones='$observaciones', Cuotas='$cuota'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql); 


        if($update){
            echo "Los datos se han actualizado correctamente";
            include 'correcto.php';
        }else {
            echo "Error en actualizar los datos echo .mysqli_error($conexion)";
            include 'error.php';
        }

 

?>
