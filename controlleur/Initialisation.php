<?php
include '..\model\Joueur.php';
include '..\model\Question.php';

//$nomEleve = $_GET[""]

$nomEleve = 'toto';

$unJoueur = new Joueur($nomEleve);

$ListeQuestion = [ 
		$question1	= new Question() ,
		$question2	= new Question() ,
		
				] ;


//returne question1
header('Location : ');
?>