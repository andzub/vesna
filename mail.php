<?php
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $key = '6LcNcjAUAAAAAIhzdFKmkXGI4mFcEOCmMPprZJWK';
    $query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];
    $data = json_decode(file_get_contents($query));

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $comp = trim($_POST['comp']);
    $text = trim($_POST['text']);

    $to = 'sales@vesnaph.com'; 
    $subject = 'Письмо с сайта vesnaph';
    $message = "Имя: $name\n
    Email: $email\n
    Телефон: $tel\n
    Компания: $comp\n
    Сообщение: $text\n";
    mail($to, $subject, $message);

    if ($data->{'success'}===false ) {  
        header("Location: /kontakty/#form");
    } 
    else if ($data->{'success'}=== true ) {
        header("Location: /blagodarnost");
    }