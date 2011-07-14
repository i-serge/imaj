<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <script type="text/javascript"  src="/js/principal.js"></script>
        <link href="/css/login.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="login">
            <?php
            if( isset( $error ) ) echo $error;
            echo form_open('/login/validate');
            echo 'Usuario:' . form_input('usuario', 'usuario') . '<br/>';
            echo 'Constrasena:' . form_password('password', '');
            echo form_submit( 'submit', 'Entrar' );
            ?>
        </div>
    </body>
</html>
