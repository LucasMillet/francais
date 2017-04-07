<?php
include '..\model\package.php';

$nomEleve = $_GET['nom'];
$prenomEleve = $_GET['prenom'];

$vieDefaut = 3;


$unJoueur = new Joueur($nomEleve, $prenomEleve, $vieDefaut);

$ListeQuestion = [ 
		$question1	= new Question() ,
		$question2	= new Question() ,
		
				] ;


//returne question1
header('Location : ');
?>