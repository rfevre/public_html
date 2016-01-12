<html>
<head><title>PHP – Inscription</title></head>
<body>

<form method="post" action="inscription.php">
Saisissez votre nom : <p>
<input type="text" name="nom"><p>
Saisissez votre prenom : <p>
<input type="text" name="prenom"><p>
<input type="submit">
</form>

<?php
	$dbserver="psqlserv";
	$username="fevrer";
	$password="moi";
	$database="da2i";
	$con= new PDO("pgsql:host=$dbserver dbname=$database", "$username" , "$password");


	if (isset($_POST['nom']) && isset($_POST['prenom'])) {
		$requete="Insert into inscription Values ('".$_POST['nom']."','".$_POST['prenom']."');";
		$stmt = $con->exec($requete);
	}

	$requete="Select * from inscription";
	$stmt = $con->query($requete);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	echo "<table><th>Nom</th><th>Prenom</th>";
	foreach ($result as $var){
		echo "<tr>";
		echo "<td>".$var["nom"]."</td>";
		echo "<td>".$var["prenom"]."</td>";
		echo "</tr>";
	}
	$stmt->closeCursor();
	$con=null;
?>

</body>
</html>