<?php

	require"config.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);
	extract($_POST);
	$sql="INSERT INTO site (titre,auteur,fichier,cat,texte) VALUES ('$nm','$art','$nf','$cat','$desc')";
	$req = mysql_query($sql) or die ('Erreur SQL !<br>'.$sql.'</br>'.mysql_error());

	header('Location: admin.php');

?>