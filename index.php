<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
<h1>Registro</h1> 
<div class="input-wrapper">
     <input type="text" name="usuario" placeholder="Usuario">
</div>
<p></p>
<div class="input-wrapper">
     <input type="text" name="nombre" placeholder="Nombre">
</div>
<p></p>
<div class="input-wrapper">
     <input type="email" name="correo" placeholder="Correo">
</div>
<p></p>
<div class="input-wrapper">
     <input type="tel" name="contacto" placeholder="Contacto">
</div>
<p></p>
<div class="input-wrapper">
     <input type="text" name="direccion" placeholder="Direccion">
</div>
<p></p>

<input class="btn" type="submit" name="register" value="Registrar">
<p></p>
<input class="btn" type="submit" name="register" value="Buscar">

    </form>
    <?php
     include("registrar.php")
    ?>
</body>
</html>