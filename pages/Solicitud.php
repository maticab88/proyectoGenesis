<?php

    /*asignar los includes*/
    session_start();
    include 'conexion.php';
    include 'menu.php';
    
?>
    <h1>Agregar nuevo cliente</h1>

        <!-- Formulario para cargar los clientes -->
    <div class="p-4">
    <form action="carga.php" method="POST">

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" name="fecha">
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="vendedor">Vendedor</label>
                <input class="form-control" type="text" name="vendedor" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="equipo">Equipo</label>
                <input class="form-control" type="text" name="equipo" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="solicitud">Solicitud</label>
                <input class="form-control" type="text" name="indice" id="">
                <span>-</span>
                <input class="form-control" type="number" name="solicitud" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="anexo">Anexo</label>
                <input class="form-control" type="text" name="anexo" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="apellido">Apellido</label>
                <input class="form-control" type="text" name="apellido" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="domicilio">Domicilio</label>
                <input class="form-control" type="text" name="domicilio" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="loc">Loc/Prov</label>
                <input class="form-control" type="text" name="Loc" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="dni">DNI</label>
                <input class="form-control" type="number" name="dni" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static  mb-4">
                <label for="nacimiento">Nacimiento</label>
                <input class="form-control" type="date" name="nacimiento" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="telefono">Telefono</label>
                <input class="form-control" type="text" name="telefono" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="mail">Mail</label>
                <input class="form-control" type="email" name="mail" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="actividad">Actividad</label>
                <input class="form-control" type="text" name="actividad" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="ingresos">Ingresos</label>
                <input class="form-control" type="text" name="ingresos" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="modelo">Modelo</label>
                <input class="form-control" type="text" name="modelo" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Precio</label>
                <input class="form-control" type="number" name="precio" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Cuotas</label>
                <input class="form-control" type="number" name="cuotas" id="">
            </div>
        </div>

    </div>

        
        <input class="btn btn-primary"type="submit" value="Enviar">

    </form>
</div>
<?php
    include 'aside.php';
 ?>