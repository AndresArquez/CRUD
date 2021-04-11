<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide2'];
  $vnombreprograma=$_POST['nombreprograma'];
  $vtipoprograma=intval($_POST['tipoprograma']);
  
  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion, "update  programa set Progra_Nombre='{$vnombreprograma}' ,Progra_tipo='{$vtipoprograma}' where Progra_id='{$vide}'");

  if ($miconexion->affected_rows>0)
    {
    echo "Actualizacion exitosa";
    }
?>
