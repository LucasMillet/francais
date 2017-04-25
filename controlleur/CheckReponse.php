<?php
include '..\model\package.php';


$ReponseUser = $_GET['ReponseUser'];
$index = ListQuestion.getIndexActuel();

$LaQuestion = ListQuestion.GetUneQuestion($index);
$LaReponse = $LaQuestion.getReponse();

if ($ReponseUser == $LaReponse ){
	header("Location : ..\vue\question.php?resulta=true");
} else {
	Joueur.perd1Pv();
	header("Location : ..\vue\question.php?Resulta=false&Reponse=$LaReponse");
}
	
?>