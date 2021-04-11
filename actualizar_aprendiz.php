
<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombres=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $vdireccion=$_POST['direccion'];
  $vtelefono=$_POST['telefono'];
  
  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion, "update aprendices set Apre_Nombres='{$vnombres}',Apre_Apellidos='{$vapellidos}',Apre_Direccion='{$vdireccion}',Apre_Telefono='{$vtelefono}' where Apre_id='{$vide}'");

  if ($miconexion->affected_rows>0)
    {
    echo "Actualizacion exitosa";
    }
?>

