<?php
if (session_id() === '') {
    session_start();
}

require_once '../controlador/AuthController.php';
if (!AuthController::isAuthorizedSession()) {
    header('Location: ../vista/users/login.php');
    exit();
}

if (!isset($_GET['i']) || $_GET['i'] === '') {
    if (isset($_SESSION['i']) && $_SESSION['i'] !== '') {
        $_GET['i'] = $_SESSION['i'];
    } else {
        $_GET['i'] = 'en';
    }
}

require_once '../config.php';
require_once '../modelo/StatsRepository.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function redirect_panel_email($message)
{
    $_SESSION['echo'] = $message;
    header('Location: ../vista/users/panel.php');
    exit();
}

if (!isset($_POST['profesional'])) {
    header('Location: ../vista/users/panel.php');
    exit();
}

$destinoEmail = isset($_POST['destino_email']) ? trim((string) $_POST['destino_email']) : '';
$asuntoDestino = isset($_POST['asunto_destino']) ? trim((string) $_POST['asunto_destino']) : '';
$contenido = isset($_POST['contenido']) ? trim((string) $_POST['contenido']) : '';

if ($destinoEmail === '') {
    redirect_panel_email("<h2 class='rojo' id='emerg'>¿A qué correo es destinado? Es obligatorio</h2>");
}

if ($asuntoDestino === '') {
    redirect_panel_email("<h2 class='rojo' id='emerg'>Agregue el asunto, es obligatorio</h2>");
}

if ($contenido === '') {
    redirect_panel_email("<h2 class='rojo' id='emerg'>Agregue contenido, es obligatorio</h2>");
}

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host = SMTP;
    $mail->SMTPAuth = true;
    $mail->Username = SMTPUSR;
    $mail->Password = SMTPPASS;
    $mail->SMTPSecure = SMTPS;
    $mail->Port = (int) PORT;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom(From, ServerName);
    $mail->addAddress($destinoEmail, 'Destinatario');
    $mail->Subject = $asuntoDestino;
    $mail->isHTML(true);
    $mail->Body = nl2br(htmlspecialchars($contenido, ENT_QUOTES, 'UTF-8'));
    $mail->AltBody = $contenido;
    $mail->send();

    $statsRepository = new StatsRepository();
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    if ($ip !== '' && $ip !== '::1') {
        $statsRepository->registerEmailSent($ip, 'panel_mail');
    }

    redirect_panel_email("<h2 class='verde' id='emerg'>Éxito al enviar el correo al cliente.</h2>");
} catch (Exception $e) {
    redirect_panel_email("<h2 class='rojo' id='emerg'>Error al enviar el correo al cliente, intente más tarde.</h2>");
}