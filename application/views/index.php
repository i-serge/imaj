<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript"  src="/js/principal.js"></script>
        <title>IMAJ</title>
    </head>
    <body>
        <?=foreach($user as $r) ?>
		<p>Nombre: <?=$r['nombre']?>
		Nombre de usuario: <?=$r['usuario']?>
		Contraseña: <?=$r['contrasena']?></p>
		<?=exit?>

        <div id="uno">UNo</div> <div id="dos">DOs</div>
        <div id="contenido">
        </div>
		<a href="index.php/prueba/index/">prueba</a>
    </body>
</html>
