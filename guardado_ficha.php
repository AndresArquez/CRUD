<?php
include('funciones.php');
  $vnumficha=$_POST['numficha'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"insert into fichas (ficha_numero) values ('{$vnumficha}') ");
  
  if ($resultado)
    {
        echo "Guardado exitoso";
    }

?>