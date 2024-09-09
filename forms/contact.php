<?php
// Iniciar la sesión si no está ya activa
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incluir las librerías de PHPMailer
require("class.phpmailer.php");
require("class.smtp.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los números generados y la respuesta del usuario
    $num1 = isset($_SESSION['num1']) ? $_SESSION['num1'] : null;
    $num2 = isset($_SESSION['num2']) ? $_SESSION['num2'] : null;

    if ($num1 === null || $num2 === null) {
        echo '<div>Error al generar la pregunta de seguridad. Intente nuevamente.</div>';
        exit;
    }

    $correct_answer = $num1 + $num2;
    $user_answer = intval($_POST['math-captcha']);

    if ($user_answer !== $correct_answer) {
        echo '<div>Respuesta incorrecta a la pregunta de seguridad.</div>';
    } else {
        $nombre = htmlspecialchars($_POST['name']);
        $telefono = htmlspecialchars($_POST['phone']);
        $empresa = htmlspecialchars($_POST['company']);
        $provincia = htmlspecialchars($_POST['province']);
        $mensaje_usuario = htmlspecialchars($_POST['message']);

        // Datos de la cuenta de correo utilizada para enviar vía SMTP
        $smtpHost = "smtp.herrafersrl.com.ar";  // Dominio alternativo brindado en el email de alta 
        $smtpUsuario = "landing@herrafersrl.com.ar";  // Mi cuenta de correo
        $smtpClave = "Audio123";  // Mi contraseña

        // Dirección de correo electrónico donde quieres recibir los mensajes
        $emailDestino = "info@herrafersrl.com.ar";

        // Asunto del correo electrónico
        $asunto_correo = "Landing Compresores Schulz - Nuevo contacto de $nombre";

        // Crear una instancia de PHPMailer
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 587; 
        $mail->SMTPSecure = 'tls';
        $mail->IsHTML(true); 
        $mail->CharSet = "utf-8";

        // Configuración del servidor SMTP
        $mail->Host = $smtpHost; 
        $mail->Username = $smtpUsuario; 
        $mail->Password = $smtpClave;

        // Datos del remitente
        $mail->From = $smtpUsuario; // Email desde donde envío el correo.
        $mail->FromName = $nombre;
        $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

        // Asunto y cuerpo del correo
        $mail->Subject = $asunto_correo; 
        $mensajeHtml = nl2br($mensaje_usuario);
        $mail->Body = "Nombre: $nombre<br>Teléfono: $telefono<br>Empresa: $empresa<br>Provincia: $provincia<br>Comentarios: $mensajeHtml"; 
        $mail->AltBody = "Nombre: $nombre\nTeléfono: $telefono\nEmpresa: $empresa\nProvincia: $provincia\nComentarios: $mensaje_usuario"; 

        // Enviar el correo
        if ($mail->Send()) {
            echo "OK";
        } else {
            echo "Ocurrió un error inesperado.";
        }
    }
} else {
    // Generar dos números aleatorios y almacenarlos en la sesión
    $_SESSION['num1'] = rand(1, 10);
    $_SESSION['num2'] = rand(1, 10);

    // Redirigir a la página del formulario
    header("Location: ../index.php");
    exit;
}
?>
