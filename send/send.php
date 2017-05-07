<?php

if (isset($_POST['name']) && !empty($_POST['name'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['message']) && !empty($_POST['message'])
    ) {
    $destination = "leranprogic@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $content = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    mail($destination, "Contact: " , $content);
    echo "<script>";
    echo "alert('Gracias por comentar :) ');";
    echo "window.location = 'https://progic.pe.hu';";
    echo "</script>";
}else {
    echo "<script>";
    echo "alert('Error al enviar intentalo mas tarde :( ');";
    echo "window.location = 'https://progic.pe.hu';";
    echo "</script>";
}

 ?>
