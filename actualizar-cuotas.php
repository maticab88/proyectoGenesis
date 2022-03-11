<?php
        include 'conexion.php';
        include 'menu.php';
        $cuota =  $_POST['cuota'];
        $solicitud = $_POST['Solicitud'];
        $sellado = $_POST['sellado'];
        $seguro = $_POST['seguro'];
        $observaciones = $_POST['observaciones'];
        $adelanto = $_POST['adelanto'];
        $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");  
        $pagos = mysqli_fetch_assoc($query2);
        $total = $pagos['Total'];
        $monto = $pagos['Cuotasig'];
        mysqli_query($conexion, "SET NAMES 'utf8'"); 
        
        $SeguroD = $sellado + $seguro;
        $total = $total + $seguro;
        /*$sql = "UPDATE pagos SET Sellado='$SeguroD', Total='$total', Observaciones='$observaciones', Cuota='$cuota', Abono='$adelanto'  WHERE Solicitud=$solicitud";*/
        $update = mysqli_query($conexion, $sql); 
        $sql = "UPDATE pagos SET Sellado='$SeguroD'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql); 
        $sql = "UPDATE pagos SET Total='$total'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
        $sql = "UPDATE pagos SET Observaciones='$observaciones'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
        $sql = "UPDATE pagos SET Cuota='$cuota'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
        $sql = "UPDATE pagos SET Abono='$adelanto'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);

        if($cuota > 12){
           echo $monto = $monto - 1000;
            $sql = "UPDATE pagos SET Cuotasig='$monto'  WHERE Solicitud=$solicitud";
            $update = mysqli_query($conexion, $sql);
        }

        if($update){
            echo "Los datos se han actualizado correctamente";
            include 'correcto.php';
        }else {
            echo "Error en actualizar los datos echo .mysqli_error($conexion)";
            include 'error.php';
        }

 

?>
