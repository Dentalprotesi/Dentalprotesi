<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<title> Data e ora del server </title>
<head>
<body>
<h1> Dta e Ora </h1>
<?
date_default_timezone_set('Europe/Rome');
echo "<p> Sono le ore ".date("H:i:s)." del giorno ".date("d/m/y")."</p>;
?>
</body>
</html>