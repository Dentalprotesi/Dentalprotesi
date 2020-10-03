<?php
// Recupero i valori inseriti nel form
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];

// compilo un messaggio combinando i dati recuperati dal form
$testo = "Nome: " . $nome . "\n"
       . "Email: " . $email . "\n"
       . "Messaggio:\n" . $msg;

// uso la funzione mail di PHP per inviare questi dati al mio indirizzo di posta
mail('lucabee@libero.it', 'Messaggio dal mio sito web', $testo);

// Mostro un messaggio di conferma all'utente
echo 'Grazie per averci contattato!';
?>