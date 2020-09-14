<?php
if(!empty($_POST["email"]))
    {
    $para  = 'cpuppo@gmail.com';

    // título
    $titulo = 'Contacto desde carolinapuppo.com.ar';

    // mensaje
    $mensaje = '
    <html>
    <head>
    <title>Contacto desde carolinapuppo.com.ar</title>
    </head>
    <body>
    <p>Datos</p>
    <table>
        <tr>
        <td>Nombre:'.$_POST["name"].'</td>
        </tr>
        <tr>
        <td>Correo:'.$_POST["email"].'</td>
        </tr>
        <tr>
        <td>Asunto:'.$_POST["subject"].'</td>
        </tr>
        <tr>
        <td>Mensaje:'.$_POST["message"].'</td>
    </tr>
    </table>
    </body>
    </html>
    ';
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    // Cabeceras adicionales
    //$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
    $cabeceras .= 'From: '.$_POST["name"].'<'.$_POST["email"].'>' . "\r\n";
    //$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
    //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

    // Enviarlo
    mail($para, $titulo, $mensaje, $cabeceras);
    echo'<script>window.history.back();</script>'; 
    }
else   
    {
    echo'Error al enviar el correo. Intente nuevamente.';
    }
?>