<?php
include('funciones.php');
  $vnombreprograma=$_POST['nombreprograma'];
  $vtipoprograma=intval($_POST['tipoprograma']);

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into programa (Progra_Nombre,Progra_tipo) values ('{$vnombreprograma}','{$vtipoprograma}') ");
  
  if ($resultado)
    {
        echo "Guardado exitoso";
    }

?>