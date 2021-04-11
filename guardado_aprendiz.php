<?php
include('funciones.php');
  $vtipoid=$_POST['tipoid'];
  $vnumid=$_POST['numid'];
  $vnombres=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $vdireccion=$_POST['direccion'];
  $vtelefono=$_POST['telefono'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into aprendices (Apre_tipoid,Apre_numid,Apre_nombres,Apre_apellidos,Apre_direccion,Apre_telefono,Apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}') ");
  
  if ($resultado)
    {
     echo "Guardado exitoso";
    }

?>