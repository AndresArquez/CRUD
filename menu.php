<?php
 include('funciones.php');
 session_start();
 $_SESSION['nusuario']=$_POST['usuario'];
 $_SESSION['nclave']=$_POST['clave'];

 $miconexion=conectar_bd('', 'sena_bd');
 $resultado=consulta($miconexion,"select * from usuarios where
 usua_nomuser='{$_SESSION['nusuario']}' and
usua_contra='{$_SESSION['nclave']}'");
?>
<!doctype html>
<html>
  <head>
    <title>Menu principal</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="miscss/stilo.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    </head>
     <body>
         <div id="div1" class="container">
            <br>
            <div id="div2">
              <?php if($resultado->num_rows>0) { ?> <img src="imagenes/sena.jpg"> <img class="imgmin" src="imagenes/min.png"> <?php } ?>
                <div id="div3" >
                <?php
                    if($resultado->num_rows>0)
                    {
                    $fila = $resultado->fetch_object();
                    $_SESSION['Tipo_usuario']=$fila->usua_tipo;
                    ?>
                    <label class="lgris"> Bienvenido <?php echo
                    $_SESSION['nusuario'] ?></label> <br>

                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='Registro_programas.php'" value="Crear programa">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='consulta_programa.php'" value="Consulta programa">
                   
                    <br><br>
                   
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='modificar_programa.php'" value="Modificar programa">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='Borrar_programa.php'" value="Eliminar programa">
                   
                    <br><br>
                    
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='Registrar_ficha.php'" value="Crear ficha">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='consultar_ficha.php'" value="Consultar ficha">
                    
                    <br><br>
                    
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Modificar ficha">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='index.php'" value="Eliminar ficha">
                    
                    <br> <br>

                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='registro_aprendiz.php'" value="Registro de aprendices">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='consulta_aprendiz.php'" value="Consulta de aprendices">
                   
                    <br> <br>
                    
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='modificar_aprendiz.php'" value="Actualización de aprendices">
                    <input style="width:40%;" class="btn btn-success" type="button" onclick="location.href ='borrar_aprendiz.php'" value="Borrar aprendices">
                   
                   

                    <?php
                      }
                      else
                      {
                      echo "Usuario o clave invalido";
                      }
                    $miconexion->close();
                    ?>
                  <br><br>
                </div>
            </div>
        </div>
    </body>
</html>
