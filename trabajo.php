
<?php
 
echo "Hola  soy Hilder Rojas V";
<br>
<br>
if (($a % 2) == 1)
{ echo "$a es impar." ;}
if (($a % 2) == 0)
{ echo "$a es par." ;}


?>
<!DOCTYPE>
<head>
<title>Mi agenda personal</title>
<meta charset="utf-8">
</head>
<body bgcolor=”#00FF00”>
</body>
<body>
<div class="formulario">
<br>
<br>
<center> 
<form action="validar.php" method="post">
<div class="form-group">
<img src="imagenes/usuario.png" border="1"  width="50" height="40">
<label class="col-xs-12" for="usuario"><h3>Usuario</h3></label>
<div class="col-xs-10 col-xs-offset-1">
<input type="text" name="mail" class="form-control Input" required placeholder="">
</div>
</div>
<div class="form-group">
<img src="imagenes/pass.png" border="1"  width="50" height="40">
<label class="col-xs-12" for="password"><h3>Contraseña</h3></label>
<div class="col-xs-10 col-xs-offset-1">
<input type="password" name="pass" class="form-control col-xs-12 Input" required placeholder="">
</div>
</div>
<div class="form-group">
<button type="submit" ame="submit" class="btn btn-success center-block btn-lg">Ingresar</button>
<button type="submit" class="btn btn-muted center-block btn-lg"><a href="registro.php">Registrar</a></button>
<button type="reset" class="btn btn-danger center-block btn-lg">Limpiar</button>
</div>
</form>
</center>
</body>
</html>