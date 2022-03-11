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
        $sql = "UPDATE pagos SET Sellado='$SeguroD', Total='$total', Observaciones='$observaciones', Cuota='$cuota', Abono='$adelanto'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
        /*if(isset($seguro)){
            echo $sql2 = "UPDATE pagos SET Sellado='$SeguroD'  WHERE Solicitud=$solicitud";
            $update = mysqli_query($conexion, $sql2); 
            $sql3 = "UPDATE pagos SET Total='$total'  WHERE Solicitud=$solicitud";
            $update = mysqli_query($conexion, $sql3);
            if($update){
                echo "Los datos se han actualizado correctamente";
                include 'correcto.php';
            }else {
                echo "Error en actualizar los datos echo .mysqli_error($conexion)";
                include 'error.php';
            }
        }elseif(isset($observaciones)){
            echo $sql4 = "UPDATE pagos SET Observaciones='$observaciones' WHERE Solicitud=$solicitud";
            $update2 = mysqli_query($conexion, $sql4);
            if($update2){
                echo "Los datos se han actualizado correctamente";
                include 'correcto.php';
            }else {
                echo "Error en actualizar los datos echo .mysqli_error($conexion)";
                include 'error.php';
            }
        }
        
        
        if(isset($cuota)){
            echo "entro";
           echo $sql5 = "UPDATE pagos SET Cuota='$cuota'  WHERE Solicitud=$solicitud";
            $update3 = mysqli_query($conexion, $sql5);
            if($update3){
                echo "Los datos se han actualizado correctamente";
                include 'correcto.php';
            }else {
                echo "Error en actualizar los datos echo .mysqli_error($conexion)";
                include 'error.php';
            }
        }
        

        if(isset($adelanto)){
            $sql6 = "UPDATE pagos SET Abono='$adelanto'  WHERE Solicitud=$solicitud";
            $update5 = mysqli_query($conexion, $sql6);
            if($update5){
                echo "Los datos se han actualizado correctamente";
                include 'correcto.php';
            }else {
                echo "Error en actualizar los datos echo .mysqli_error($conexion)";
                include 'error.php';
            }
        }
        

        if($cuota > 12){
           echo $monto = $monto - 1000;
            echo $sql7 = "UPDATE pagos SET Cuotasig='$monto'  WHERE Solicitud=$solicitud";
            $update6 = mysqli_query($conexion, $sql7);
            if($update6){
                echo "Los datos se han actualizado correctamente";
                include 'correcto.php';
            }else {
                echo "Error en actualizar los datos echo .mysqli_error($conexion)";
                include 'error.php';
            }
        }/*

        if($update){
            echo "Los datos se han actualizado correctamente";
            include 'correcto.php';
        }else {
            echo "Error en actualizar los datos echo .mysqli_error($conexion)";
            include 'error.php';
        }

 

?>
