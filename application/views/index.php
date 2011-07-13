<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach($user as $r) ?>
		<p>Nombre: <?php echo $r['nombre']?>
		Nombre de usuario: <?php echo $r['usuario']?>
		Contraseña: <?php echo $r['contrasena']?></p>
		<?php endforeach; ?>

    </body>
</html>
