<?php
if (session_id() === '') {
    session_start();
}

if (!isset($_GET['i']) || $_GET['i'] === '') {
    if (isset($_SESSION['i']) && $_SESSION['i'] !== '') {
        $_GET['i'] = $_SESSION['i'];
    } else {
        $_GET['i'] = 'en';
    }
}

// require_once '../config.php';
// require_once '../modelo/StatsRepository.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function redirect_public_email($message)
{
    $_SESSION['echo'] = $message;
    header('Location: ' . url_028);
    exit();
}

function public_recaptcha_ok($token)
{
    if ($token === '') {
        return false;
    }

    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . capcha_secret . '&response=' . $token . '&remoteip=' . $ip);
    if ($response === false) {
        return false;
    }

    $decoded = json_decode($response, true);
    return is_array($decoded) && isset($decoded['success']) && $decoded['success'] === true;
}

if (!isset($_POST['submit'])) {
    header('Location: ../index.php?i=' . $_SESSION['i']);
    exit();
}

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim((string) $_POST['phone']) : '';
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';
$recaptcha = isset($_POST['g-recaptcha-response']) ? trim((string) $_POST['g-recaptcha-response']) : '';

if (!public_recaptcha_ok($recaptcha)) {
    redirect_public_email("<h2 class='rojo' id='emerg'>" . const_0430 . "</h2>");
}

if ($name === '') {
    redirect_public_email("<h2 class='rojo' id='emerg'>" . const_0431 . "</h2>");
}

if ($email === '') {
    redirect_public_email("<h2 class='rojo' id='emerg'>" . const_0432 . "</h2>");
}

if ($message === '') {
    redirect_public_email("<h2 class='rojo' id='emerg'>" . const_0433 . "</h2>");
}

$mail = new PHPMailer(true);
/* INiciA */
        define('ServerName', 'createsoftw.com');
        define('const_cliente', 'Contacto cliente desde createsoftw');
        define('recive', 'jvczxc2021@gmail.com');
        define('SMTP', 'mail.createsoftw.com');
        define('PORT', '465');
        define('SMTPS', 'ssl');
        define('SMTPUSR', 'info@createsoftw.com');
        define('SMTPPASS', 'Losteques.2026#');
        define('From', 'info@createsoftw.com');
        define('basepath', 'http://mail.createsoftw.com');
        define('email', 'email/index.php');
        define('email_verifica', 'email/verifica_email.php');
        define('home', 'index.php?i=' . $languageCode);
        define('url_028', '../index.php?i=' . $languageCode . '&w=email');
        define('const_001', 'Rainforest Discovery | Aventura y Formación');
        define('name', 'Rainforest Discovery');
/* fin */
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
    $mail->addReplyTo($email, $name);
    $mail->addAddress(recive, const_cliente);
    $mail->Subject = 'Contacto de Cliente - ' . ServerName;
    $mail->isHTML(true);
    $mail->Body = 'Este es el Email que nos envia: <strong>' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</strong><br>'
        . 'Lo recibimos del Sr/a: <strong>' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</strong><br>'
        . 'Telefono: <strong>' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</strong><br>'
        . 'Motivo del Contacto o Descripcion: <span style="color:green;">' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</span>';
    $mail->AltBody = "Este es el Email que nos envia: $email\nLo recibimos del Sr/a: $name\nTelefono: $phone\nMotivo del contacto o descripcion: $message";
    $mail->send();

    $statsRepository = new StatsRepository();
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    if ($ip !== '' && $ip !== '::1') {
        $statsRepository->registerEmailReceived($ip, 'email');
    }

    redirect_public_email("<h2 class='verde' id='emerg'>" . const_0434 . "</h2>");
} catch (Exception $e) {
    redirect_public_email("<h2 class='rojo' id='emerg'>" . const_0435 . "</h2>");
}