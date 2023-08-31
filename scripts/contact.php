<?php
    // Captura de datos
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $consult = $_POST['consult'];
    // Generar el mensaje
    mail( 
        "info@misitio.com", # destinatario
        $subject, # asunto
        $consult, # cuerpo
        "From: $name<$email>" # remitente
    );
    // Redireccionamiento
    header("location: ../blog.html");
?>
<p>
    Muchas gracias por enviar tu consulta, podes volver a la pagina anterior haciendo click en el siguiente <a href="../blog.html">link</a>
</p>


<!-- Si quiero mandar como mensaje la informacion que el cliente de en el formulario este es el codigo -->
<!--     $message = "
    <ul>
        <li><strong>Nombre:</strong> $name</li>
        <li><strong>Correo:</strong> $email</li>
        <li><strong>Asunto:</strong> $subject</li>
        <li><strong>Consulta:</strong> $consult</li>
    </ul>";
    echo($message) -->