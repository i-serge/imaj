<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<?php 
		echo form_open('prueba/index');
		$data['x'] = array ( 
              'name' => 'username', 
              'id' => 'username', 
              'value' => 'Nombre', 
              'maxlength' => '100 ', 
              'size' => '50 ', 
              'estilo' => 'width: 50%' 
		); 
		$data['y'] = array ( 
              'name' => 'username', 
              'id' => 'username', 
              'value' => 'juanperez', 
              'maxlength' => '100 ', 
              'size' => '50 ', 
              'estilo' => 'width: 50%' 
		); 
		foreach($data as $d)
		{
			echo form_input($d);
			echo '<br />';
		}
		echo form_password($data); 
		echo form_close();
	?>
</body>
</html>