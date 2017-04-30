<?php

require '../model/package.php';
$Liste = new  ListQuestion();
$Liste->ListQuestionPopulated();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$vie = $_POST['vie'];


$Joueur = new Joueur($nom, $prenom, $vie);

$reponseUser = $_POST['proposition'];

$numeroQuestion = $_POST['numeroQuestion'];
$laQuestion = $Liste->GetUneQuestion($numeroQuestion);
$bonneReponse = $laQuestion->getReponse();

if (trim($reponseUser) == trim($bonneReponse)){
	if($numeroQuestion == $Liste->countQuestions()){
		echo "<meta http-equiv='refresh' content='0;url=../vue/gagne.php?nom=".$nom."&prenom=".$prenom."&vie=".$vie."&message=<font color=green>Bravo ! La bonne reponse &eacute;tait bien : &laquo;".$reponseUser."&raquo;</font>'>";
	} else {
	$numeroQuestion++;
	echo "<meta http-equiv='refresh' content='0;url=../vue/verifReponse.php?bonneReponse=True&nom=".$nom."&prenom=".$prenom."&vie=".$vie."&numeroQuestion=$numeroQuestion&message=<font color=green>Bravo ! La bonne reponse &eacute;tait bien : &laquo;".$reponseUser."&raquo;</font>'>";
	}
} else {
	$Joueur->perd1Pv();
	$vie = $Joueur->getVie();
	if ($Joueur->getVie() == 0){
		$numeroQuestion = 0;
		echo "<meta http-equiv='refresh' content='0;url=../vue/perdu.php?nom=".$nom."&prenom=".$prenom."&vie=".$vie."&numeroQuestion=$numeroQuestion&message=<font color=red>Faux. &laquo;".$reponseUser."&raquo; n&#146;&eacute;tait pas la bonne r&eacute;ponse</font>'>";
	} else {
	echo "<meta http-equiv='refresh' content='0;url=../vue/verifReponse.php?bonneReponse=False&nom=".$nom."&prenom=".$prenom."&vie=".$vie."&numeroQuestion=$numeroQuestion&message=<font color=red>Faux. &laquo;".$reponseUser."&raquo; n&#146;&eacute;tait pas la bonne r&eacute;ponse</font>'>";
	}
}
	
?>