<!doctype html>
<html>
    <head>
        <title>Consulta de Aprendices</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="miscss/stilo.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="divconsulta" class="container">
      <center>  <strong class="lgris">Ingrese criterio de busqueda</strong> </center>

            <br>
            <div id="div2">
                <div id="div4" >
                    <form name="formulario" role="form" method="post">
                    <div class="col-md-12">
                        <br> <br>
                        <div class="form-row">
                        <div class="form-group col-md-3">
                            <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN" />
                        </div>

                        <div class="form-group col-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" />
                        </div>
                        <div class="form-group col-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
                        </div>

                        <div class="form-group col-md-3">
                            <input class="btn btn-success" type="submit" value="Consultar" >
                        </div>
                        </div>
                    <br>
                </div>
            </form>
            <br>
            </div>

            <div id="divconsulta2">
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
            {
            include('funciones.php');
            $vnumid=$_POST['numid'];
            $vnombres=$_POST['nombres'];
            $vapellidos=$_POST['apellidos'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where trim(Apre_Numid) like '%{$vnumid}%' and (trim(Apre_Nombres) like '%{$vnombres}%' and trim(Apre_Apellidos) like '%{$vapellidos}%')");
            if($resultado->num_rows>0)
                {
                while ($fila = $resultado->fetch_object())
                {
                     echo  "<p>Tipo de documento</p>";
                    echo    $fila->Apre_Tipoid." <br><hr>
                           <p>Numero de cedula</p>
                         ".$fila->Apre_Numid."  <br><hr>
                         <p>Nombres</p>
                         ".$fila->Apre_Nombres." <br><hr>
                         <p>Apellidos</p>
                         ".$fila->Apre_Apellidos." <br><hr>
                         <p>Direccion</p>
                         ".$fila->Apre_Direccion." <br><hr>
                         <p>Telefono</p>
                         ".$fila->Apre_Telefono." <br><hr>
                         <p>Numero de ficha</p>
                         ".$fila->Apre_Ficha."<br>";
                }
            } 
            else{
                 echo "No existen registros";
                }
            $miconexion->close();
            }?>
            </div>
        </div>
        </div>
    </body>
</html>