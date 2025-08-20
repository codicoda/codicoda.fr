<?php
session_start();
$isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');

$turnstile_secret_key = $isLocal
    ? ($_ENV['TURNSTILE_SECRET_KEY_DEV'] 
        ?? $_SERVER['TURNSTILE_SECRET_KEY_DEV'] 
        ?? getenv('TURNSTILE_SECRET_KEY_DEV') 
        ?? null)
    : ($_ENV['TURNSTILE_SECRET'] 
        ?? $_SERVER['TURNSTILE_SECRET'] 
        ?? getenv('TURNSTILE_SECRET') 
        ?? null);
$to = $_ENV['CONTACT_EMAIL'] ?? $_SERVER['CONTACT_EMAIL'] ?? getenv('CONTACT_EMAIL') ?? null;

if (empty($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], 'codicoda.fr') === false) {
    die("Accès non autorisé.");
}

function sanitize_mail_input($data) {
    $data = trim($data);
    $data = str_replace(["\r", "\n"], '', $data);
    $data = strip_tags($data);
    return substr($data, 0, 255);
}

function sanitize_message($data) {
    $data = trim($data);
    $data = strip_tags($data);
    return $data;
}

$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
$subject = isset($_POST['objet']) ? sanitize_mail_input($_POST['objet']) : '';
$message = isset($_POST['message']) ? sanitize_message($_POST['message']) : '';
$name = isset($_POST['name']) ? sanitize_message($_POST['name']) : '';

if (!$subject || !$email || !$message) {
    echo "<p class='message'>Veuillez remplir tous les champs correctement.</p>";
    exit;
}

if (!empty($_POST['name'])) {
    $_SESSION['startTime'] = time();
    die("Échec de la vérification anti-bot.");
}


$minDelay = 10;
$now = time();
$startTime = $_SESSION['startTime'] ?? 0;

if (!$startTime) {
    $_SESSION['startTime'] = $now; 
    $startTime = $now;
} elseif (($now - $startTime) < $minDelay) {
    die("Veuillez patienter quelques secondes et réessayer.");
}

// Vérification Turnstile
$token = $_POST['cf-turnstile-response'] ?? '';
if (!$token) {
    die("Échec de vérification anti-bot.");
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://challenges.cloudflare.com/turnstile/v0/siteverify");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret' => $turnstile_secret_key,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR']
]));
$response = curl_exec($ch);
curl_close($ch);

$result = json_decode($response, true);
if (!$result['success']) {
    $_SESSION['startTime'] = time();
    die("Échec de la vérification anti-bot.");
}

// Envoi de l'email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8";
$body = "\n$message";
$confirm = "<body><div style='text-align: center; margin:1em;'><header><h1>Message bien envoyé !</h1></header><img src='https://codicoda.fr/fav.ico' alt='logo'><p>Votre message a bien été envoyé, nous ferons de notre mieux pour y répondre dans les plus brefs délais.</p></div></body>";
$headersconfirm = "From: $to\r\n";
$headersconfirm .= "Reply-To: $to\r\n";
$headersconfirm .= "Content-Type: text/html; charset=utf-8";

if (mail($to, $subject, $body, $headers)) {
    $_SESSION['startTime'] = time(); 
    echo "<p class='message'>Message envoyé avec succès. Merci ! <br> Nous vous répondrons dans les plus brefs délais</p>";
    mail($email, "Demande de contact", $confirm, $headersconfirm);
} else {
    echo "<p class='message'>Une erreur est survenue, veuillez réessayer plus tard.</p>";
}
?>