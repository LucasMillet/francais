<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
  
require "../model/Vie.php";

//// R�ception des donn�es /////
$nomJoueur = $_POST['Nom'];
$prenomJoueur = $_POST['Prenom'];
$numeroQuestion = $_POST['numeroQuestion'];
$question = $_POST['Question'];
$reponse = $_POST['Reponse'];

$erreur1 = $_POST['Erreur1'];
$erreur2 = $_POST['Erreur2'];
$erreur3 = $_POST['Erreur3'];

$ListeProposition = array($reponse, $erreur1, $erreur2, $erreur3);
shuffle($ListeProposition);

$proposition1 = $ListeProposition[0];
$proposition2 = $ListeProposition[1];
$proposition3 = $ListeProposition[2];
$proposition4 = $ListeProposition[3];


$vieActuelle = $_POST['Vie'];

//// test ////

//echo $question;
//echo $reponse;


?>

    <div class="container">

      <form class="form-signin" action="../controlleur/CheckReponse.php" method="post">
      <div>
      <h3>Nom : <?php echo  $prenomJoueur ?> -- Vie : <?php afficheVie($vieActuelle); ?></h3>
      
      </div>
        <h2 class="form-signin-heading">Question <?php echo $numeroQuestion+1; ?> : <?php echo $question; ?> </h2>
        <div class="col-xs-12 col-md-6 col-md-offset-1 radio">
        	<label >
        	<input type="radio" id="proposition" name="proposition" value="<?php echo $proposition1; ?>"><?php echo $proposition1; ?>
        	</label>
    	</div>
    	<div class="col-xs-12 col-md-6 col-md-offset-1 radio">
        	<label >
        	<input type="radio" id="proposition" name="proposition" value="<?php echo $proposition2; ?>"><?php echo $proposition2; ?>
        	</label>
    	</div>
    	<div class="col-xs-12 col-md-6 col-md-offset-1 radio">
        	<label >
        	<input type="radio" id="proposition" name="proposition" value="<?php echo $proposition3; ?>"><?php echo $proposition3; ?>
        	</label>
    	</div>
    	<div class="col-xs-12 col-md-6 col-md-offset-1 radio">
        	<label >
        	<input type="radio" id="proposition" name="proposition" value="<?php echo $proposition4; ?>"><?php echo $proposition4; ?>
        	</label>
    	</div>
    	
    	<input type="hidden" id="numeroQuestion" name="numeroQuestion" value="<?php echo $numeroQuestion; ?>" />
    	<input type="hidden" id="nom" name="nom" value="<?php echo $nomJoueur; ?>" />
    	<input type="hidden" id="prenom" name="prenom" value="<?php echo $prenomJoueur; ?>" />
    	<input type="hidden" id="vie" name="vie" value="<?php echo $vieActuelle; ?>" />
    	
    	<button class="btn btn-lg btn-primary col-xs-10 col-md-8 col-xs-offset-1" type="submit" style="margin-top : 25px;">V&eacute;rifier</button>
          
        
      </form>

    </div> <!-- /container -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </body>
</html>
