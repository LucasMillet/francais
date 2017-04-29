<?php

require '../model/package.php';
$Liste = new  ListQuestion();
$Liste->ListQuestionPopulated();

$nomEleve = $_GET['nom'];
$prenomEleve = $_GET['prenom'];
$numeroQuestion = $_GET['numeroQuestion'];
$vie = $_GET['vie'];

$unJoueur = new Joueur($nomEleve, $prenomEleve, $vie);
$nomJoueur = $unJoueur->getNom();
$prenomJoueur = $unJoueur->getPrenom();
if ($unJoueur->getVie()<= 0){ // Si le joueur a perdu, on relance son nombre de vie à 3
	$vie = 3;
}

$Question = $Liste->GetUneQuestion($numeroQuestion);

$laQuestion = $Question->GetQuestion();
$Reponse = $Question->GetReponse();
$Erreur1 = $Question->GetErreur1();
$Erreur2 = $Question->GetErreur2();
$Erreur3 = $Question->GetErreur3();


//retourne question
//echo "<meta http-equiv='refresh' content='0;url=../vue/question.php?Nom=$nomJoueur&Prenom=$prenomJoueur&Question=$laQuestion&Reponse=$Reponse&Erreur1=$Erreur1&Erreur2=$Erreur2&Erreur3=$Erreur3&Vie=$vie&numeroQuestion=$numeroQuestion'>";
//echo "<script type='text/javascript'>document.location.replace('../vue/question.php?Nom=$nomJoueur&Prenom=$prenomJoueur&Question=$laQuestion&Reponse=$Reponse&Erreur1=$Erreur1&Erreur2=$Erreur2&Erreur3=$Erreur3&Vie=$vie&numeroQuestion=$numeroQuestion');</script>";

?>
<form name="f" method="post" action="../vue/question.php">
<input type="hidden" id="Nom" name="Nom" value=" <?php echo $nomJoueur; ?>" />
<input type="hidden" id="Prenom" name="Prenom" value="<?php echo $prenomJoueur; ?>" />
<input type="hidden" id="Question" name="Question" value="<?php echo $laQuestion; ?>" />
<input type="hidden" id="Reponse" name="Reponse" value="<?php echo $Reponse; ?>" />
<input type="hidden" id="Erreur1" name="Erreur1" value="<?php echo $Erreur1; ?>" />
<input type="hidden" id="Erreur2" name="Erreur2" value="<?php echo $Erreur2; ?>" />
<input type="hidden" id="Erreur3" name="Erreur3" value="<?php echo $Erreur3; ?>" />
<input type="hidden" id="Vie" name="Vie" value="<?php echo $vie; ?>" />
<input type="hidden" id="numeroQuestion" name="numeroQuestion" value="<?php echo $numeroQuestion; ?>" />

<script type="text/javascript">
    document.forms["f"].submit();
  </script>
</form>

?>