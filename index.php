<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste des utilisateurs</title>
	</head>
	<body>


<h1>Exemple simple de site en PHP</h1>


<?php
require 'models/connexion.php';
require 'models/fonctions.php';



executerRequetes($db);


if(isset($_GET["action"]) && ($_GET["action"]=="ajouter" || $_GET["action"]=="modifier")) {
    include 'views/edit.php';
} else {
    include 'views/list.php';
 } 	?>
	</body>
</html>


