<?php
require '../model/package.php';
$Liste = new  ListQuestion();
$Liste->ListQuestionPopulated();

$nomEleve = $_GET['nom'];
$prenomEleve = $_GET['prenom'];

$vieDefaut = 3;

$unJoueur = new Joueur($nomEleve, $prenomEleve, $vieDefaut);
$nomJoueur = $unJoueur->getPrenom();

$Question = $Liste->GetUneQuestion(0);


//retourne question1
header("Location : ..\vue\question.php?Nom=$nomJoueur&Question=$Question");
exit();
?>