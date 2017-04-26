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

$laQuestion = $Question->GetQuestion();
$Reponse = $Question->GetReponse();
$Erreur1 = $Question->GetErreur1();
$Erreur2 = $Question->GetErreur2();
$Erreur3 = $Question->GetErreur3();

//Echo pour test
echo  $laQuestion."<br/>";
echo  $Reponse."<br/>";
echo  $Erreur1."<br/>";
echo  $Erreur2."<br/>";
echo  $Erreur3."<br/>";

//retourne question1
header("Location : ..\vue\question.php?Nom=$nomJoueur&Question=$laQuestion&Reponse=$Reponse&Erreur1=$Erreur1&Erreur2=$Erreur2&Erreur3=$Erreur3");
exit();
?>