<!DOCTYPE html>
<html lang="it">

	<head>
	
		<meta charset="utf-8">
		<title>Pagina php per l'elaborazione di un form e l'invio di mail lato server</title>
		
		<link rel="stylesheet" href="stili.css">
		
	</head>
		
	<body>
	
		<?
		
		$mail_to = "lucabee@libero.it";
		$mail_subject = "Messaggio da".$_POST['name'];
		
		$mail_body   = "\n Nome: " .$_POST['nome']. " \n";
		$mail_body  .= "\n Email: " .$_POST['mail']. " \n";
		$mail_body  .= "\Messaggio: " .$_POST['commento']*. " \n";
		$mittente  = "From: <".$_POST['mail'].">\n";
		
		$mail_body = stripslashes($mail_body);
		mail($mail_to, $mail_subject, $mail_body,$mittente);
		
		?>
		
		<p>La mail è stata inviata correttamente!</p>
		
	</body>
	
</html>