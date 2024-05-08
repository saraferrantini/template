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
    add_theme_support('post-thumbnails', ["post","page"]);
}
add_action('after_setup_theme', 'custom_theme_setup');


function mailtrap($mail) {
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '6763969999edcf';
    $mail->Password = '16e365cda6f666';
}
add_action('phpmailer_init', 'mailtrap');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    // Indirizzo email a cui verrà inviata la mail
    $to = 'joe@example.com';

    // Oggetto dell'email
    $subject = 'Nuovo messaggio dal form di contatto';

    // Corpo dell'email
    $message = 'Nome: ' . $nome . "\r\n";
    $message .= 'Email: ' . $email . "\r\n";
    $message .= 'Messaggio: ' . $messaggio;

    // Intestazioni aggiuntive
    $headers = array(
        'From: ' . $email,
        'Reply-To: ' . $email,
    );

    // Invia l'email utilizzando la funzione wp_mail() di WordPress
    if (wp_mail($to, $subject, $message, $headers)) {
        echo '<div class="alert alert-success" role="alert">Messaggio inviato con successo!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Errore durante l\'invio del messaggio. Riprova più tardi.</div>';
    }
}

?>