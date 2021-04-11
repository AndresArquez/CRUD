<!doctype html>
<html>
        <head>
        <title>Registro de Aprendices</title>
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
                <form id="formulario" role="form" method="post" action="guardado_ficha.php">

                <div class="col-md-12">
                    <strong class="lgris">Ingrese Numero de Ficha</strong>
                    <br>
                    <div class="form-row">
                </div>
                    <label class="lgris"></label>
                        <input class="form-control" type="number" name="numficha" min="9999" max="9999999999999" value="" placeholder="NUMERO DE FICHA" required/>
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