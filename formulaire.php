<html>
<head><title>PHP – Formulaire</title></head>
<body>

<form method="post" action="formulaire.php">
Saisissez votre nom : <p>
<input type="text" name="nom"><p>
<input type="submit">
</form>

<?php
if (isset($_POST['nom'])) {
	print 'Bonjour '.$_POST['nom'] ;
}
?>

</body>
</html>