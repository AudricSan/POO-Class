<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe NombreComplexe</title>
</head>
<body>
    <h1>Classe NombreComplexe</h1>
	<h2>Script PHP de test</h2>
	<?php 
		 //include_once("Complexe.class.php");
		 require 'Class/number.php';
		 
		$c1 = new Complexe(3,1);
		$c2 = new Complexe(1,2);
		echo "<p> le premier nombre complexe est :</p>";
		echo  $c1;//Appel de la fonction __toString
		echo "<p> le deuxieme nombre complexe est :</p>";
		echo $c2;
		echo "<p>L'Addition des deux nombres renvoie :</p>";
		echo $c1->ajouter($c2) ;//Appel de la fonction __toString de l'objet resultat
		echo "<p>La soustraction des deux nombres renvoie :</p>";
		echo $c1->soustraire($c2) ;
		echo "<p>La multiplication des deux nombres renvoie :</p>";
		echo $c1->multiplier($c2) ;
		echo "<p>La division des deux nombres renvoie :</p>";
		echo $c1->diviser($c2) ;
	?>