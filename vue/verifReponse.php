<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

 <title>Fran&ccedil;ais - Quizz Synth&egrave;se</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <?php
require '../model/Vie.php';
  
//// Réception des données /////
$nomJoueur = $_GET['nom'];
$prenomJoueur = $_GET['prenom'];
$vieActuelle = $_GET['vie'];
$bonneReponse = $_GET['bonneReponse'];
$numeroQuestion = $_GET['numeroQuestion'];

?>
	<div class="container">
    	<div>
      		<h3>Nom : <?php echo  $prenomJoueur ?> -- Vie : <?php afficheVie($vieActuelle); ?></h3>
    	</div>
    	<div class="col-xs-12 col-md-6 col-md-offset-1">
    	<?php
    	if (isset($_GET['message']))
			echo $_GET['message'];
		else
			echo "&nbsp;";
		?>
		</div>
    	<?php echo '<a href="../controlleur/initialisation.php?nom='.$nomJoueur.'&prenom='.$prenomJoueur.'&numeroQuestion='.$numeroQuestion.'&vie='.$vieActuelle.'">';?> <button class="btn btn-lg btn-info col-xs-10 col-md-8 col-xs-offset-1" type="submit" style="margin-top : 25px;">Continuer !</button></a>
    </div> <!-- /container -->
	

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </body>
</html>
