<?php
	session_start();
?>
<html>
<head><title>PHP – Session</title></head>
<body>

<?php
	if (!isset($_SESSION['cpt'])) {
		//Ajouter une information à la session
		$_SESSION['cpt']= 0;
	}
	//Lire l’information
	echo 'Vous avez visité '.$_SESSION['cpt']++.' fois cette page';
?>

</body>
</html>