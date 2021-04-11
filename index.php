<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf_8">
        <meta name="viewport" content="width=device_width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">        <link href="miscss/stilo.css" rel="stylesheet"/>
        <link href="miscss/stilo.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
        
    </head>
<body>
<div id="div1" class="container">
    <br>
    <div id="div2">
     <!-- Colocar imagene -->
        <img src="imagenes/sena.jpg">   <img class="imgmin" src="imagenes/min.png">

        <div id="div3">
            <form id="formulario" method="post" action="menu.php">
                <br>
                <strong class="lgris">INGRESE SU USUARIO Y CONTRASEÑA PARA INICIAR SESION</strong>
                <br>
                <label class="lgris"> Usuario </label>
                <br>
                <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                <br>
                <label class="lgris">Contraseña</label>
                <br>
                <input type="password" name="clave" value="" required/>
                <br><br>
                <input class="btn btn-success" type="submit" value="Iniciar sesion" >
                <br><br>
            </form>
        </div>
    </div>
</div>

</body>
</html>