<?php
// Recupero i valori inseriti nel form
$name = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['msg'];

// compilo un messaggio combinando i dati recuperati dal form
$testo = "Nome: " . $name . "\n"
       . "Email: " . $email . "\n"
       . "Messaggio:\n" . $message;

// uso la funzione mail di PHP per inviare questi dati al mio indirizzo di posta
mail('lucabee@libero.it', 'Messaggio dal mio sito web', $testo);

// Mostro un messaggio di conferma all'utente
echo 'Grazie per averci contattato!';
?>