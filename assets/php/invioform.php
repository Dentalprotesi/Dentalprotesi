<?php
//Recupero i valori inseriti nel form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//dopo 4 secondi rimando alla home del sito
$delay = "4";
$url = "https://dentalprotesi.github.io";

//verifico che tutti i campi siano stati compilati
if (!$name || !$email || !$message) {
	echo 'Tutti i campi del modulo sono obbligatori!';
	}

//Verifico che il nome non contenga caratteri nocivi
elseif (!preg_match('/^[A-Aa-z \'-]+$/i',$name)) {
	echo 'Il nome contiene caratteri non ammessi';
	}
	
//Verifico se un indirizzo email è valido
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'Indirizzo email non corretto';
	}else{
		
// compilo un messaggio combinando i dati recuperati dal form
$testo = "Nome: " . $name . "\n"
		. "Email: " . $email . "\n"
		. "Messaggio: " . $message;
		
// uso la funzione mail di PHP per inviare i dati al mio indirizzo di posta
mail('lucabee@libero.it', 'Mail da Dental Protesi', $testo);

//Mostro un messaggio di conferma all'utente
print "<body>
<table align='center' bordercolor='#CCCCCC'>
  <tr>
    <td>
<div align='center'><font face='Verdana, Arial, Helvetica, sans-serif'>
Grazie per averci contattato</font><br>
Per tornare all'Home page attendi 4 secondi o <a href='https://dentalprotesi.github.io'>Clicca qui</a></font></div></td>
<meta http-equiv='refresh' content='$delay; url=$url'>
</tr>
</table>
</body>";
	}
	?>