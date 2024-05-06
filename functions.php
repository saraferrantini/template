<?php

// Carica i file CSS e JavaScript di Bootstrap
function add_bootstrap() {
    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");  
}
add_action('wp_enqueue_scripts', 'add_bootstrap');

//funzione generica che richiama il file css
function custom_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

//funzione che carica tutti i file dello style.css all'interno del nostro tema
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


function custom_theme_setup() {
//per il menù di navigazione
    register_nav_menu('primary', 'Primary Menu');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_setup');

// codice per l'email

// Include le classi di PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Funzione per inviare l'email utilizzando PHPMailer
function invia_email_con_phpmailer($nome, $email, $messaggio) {
    // Includi la libreria PHPMailer
    require_once get_template_directory() . '/PHPMailer/PHPMailer.php';
    require_once get_template_directory() . '/PHPMailer/SMTP.php';
    require_once get_template_directory() . '/PHPMailer/Exception.php';

    // Inizializza un nuovo oggetto PHPMailer
    $mail = new PHPMailer(true);

    // Imposta Mailtrap come SMTP
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '6763969999edcf';
    $mail->Password = '16e365cda6f666';

    // Imposta mittente e destinatario dell'email
    $mail->setFrom($email, $nome);
    $mail->addAddress('destination@example.com', 'Destinatario');

    // Imposta il soggetto e il corpo dell'email
    $mail->Subject = 'Nuovo messaggio dal form di contatto';
    $mail->Body    = $messaggio;

    try {
        // Invia l'email
        if(!$mail->send()) {
            return false; // Errore durante l'invio dell'email
        } else {
            return true; // Email inviata con successo
        }
    } catch (Exception $e) {
        // Gestisci l'eccezione
        echo 'Si è verificato un errore durante l\'invio dell\'email: ' . $mail->ErrorInfo;
    }
}
?>
