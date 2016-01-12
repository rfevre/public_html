<html>
<head> <title>PHP – Acces BDD</title>
</head>
<body>
<?php
	$dbserver="psqlserv";
	$username="fevrer";
	$password="moi";
	$database="da2i";
	$con= new PDO("pgsql:host=$dbserver dbname=$database", "$username" , "$password");
	$query="Select * from avion";
	$stmt = $con->query($query);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach ($result as $var){
		echo $var["ano"]." - ";
		echo $var["type"]." - ";
		echo $var["places"]." - ";
		echo $var["compagnie"];
	}
	$stmt->closeCursor();
	$con=null;
?>
</body>
</html>