<?php
    $connexion = mysqli_connect('192.168.8.4:3306', 'root', 'test', 'myDb')or die('Erreur de connexion');
	//connexion � la base de donn�e
?>
<html lang = "fr">
	<head>
		<meta charset = "UTF-8">
		<title> site web intranet de Woodytoys </title>
	</head>

	<body>
		<h1> site web intranet de Woodytoys </h1>
		<?php
				$test = mysqli_query($connexion,'SELECT * FROM objets;'); //permet de tout s�lectionner dans la table objets
			while($result = mysqli_fetch_row($test)) {
				 print '<p>Article : '.$result[0].'. Prix : '.$result[1].'�</p>';//ajoute diff�rents paragraphes
			};
			 mysqli_close($connexion);
		?>
	</body>
</html>