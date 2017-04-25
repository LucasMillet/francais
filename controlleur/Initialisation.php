<?php
include '..\model\package.php';
$Liste = new  ListQuestion();

$nomEleve = $_GET['nom'];
$prenomEleve = $_GET['prenom'];

$vieDefaut = 3;

$unJoueur = new Joueur($nomEleve, $prenomEleve, $vieDefaut);

$Question = $Liste.GetUneQuestion(1);


//returne question1
header('Location : ..\vue\question.php?Nom='.$unJoueur.getPrenom().'&Question='.$Question);
exit();
?>