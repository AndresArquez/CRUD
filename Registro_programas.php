<!doctype html>
<html>
        <head>
        <title>Registro de programas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">        <link href="miscss/stilo.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
            <br>
            <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?>
            <img src="imagenes/sena.jpg"> <img class="imgmin" src="imagenes/min.png">  <?php } ?>
            <div id="div3" >
            <?php
            if($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                {
                ?>
                <form id="formulario" role="form" method="post" action="guardado_programa.php">

                <div class="col-md-12">
                    <strong class="lgris">Ingrese datos del programa</strong>
                    <br>
                    <div class="form-row">
                    </div>
                        <label class="lgris"></label>
                        <input class="form-control" style="text-transform: uppercase;" type="text" name="nombreprograma" value="" placeholder="Nombre del programa" required/>
                        <br>
                        <div class="form-group col-xs-2">
                        <select class="form-control" name="tipoprograma">
                        <option value="" selected>SELECIONAR TIPO DE PROGRAMA</option>
                        <option value="1">PRESENCIAL</option>
                        <option value="2">VIRTUAL</option>
                        <option value="3">CORTO</option>
                    </select>
                    <br>
                </div>
                <br>
                <input class="btn btn-success" type="submit" value="Guardar" >
            </div>
        </form>
        <?php
        }
        else
        {
        echo "No tiene permisos para realizar esta acción";
        }
        ?>
        <br>
        </div>
        </div>
        </div>
    </body>
</html>