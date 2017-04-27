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

    <title>Signin Template for Bootstrap</title>

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

//// Réception des données /////
$nomJoueur = $_GET['Nom'];
$question = $_GET['Question'];
$reponse = $_GET['Reponse'];

$erreur1 = $_GET['Erreur1'];
$erreur2 = $_GET['Erreur2'];
$erreur3 = $_GET['Erreur3'];

$vieActuelle = $_GET['Vie'];


//// test ////

//echo $question;
//echo $reponse;


?>

    <div class="container">

      <form class="form-signin" action="controlleur/initialisation.php" method="get">
      <div>
      <h3><?php echo "Nom : ". $nomJoueur ." -- Vie : ".$vieActuelle; ?></h3>
      </div>
        <h2 class="form-signin-heading">Question : <?php echo $question; ?> </h2>
        <div class="col-xs-6 col-md-6 col-md-offset-1 checkbox">
        	<label >
        	<input type="checkbox" id="proposition1" name="proposition1"><?php echo $reponse; ?>
        	</label>
    	</div>
    	<div class="col-xs-6 col-md-6 col-md-offset-1 checkbox">
        	<label >
        	<input type="checkbox" id="proposition2" name="proposition2"><?php echo $erreur1; ?>
        	</label>
    	</div>
    	<div class="col-xs-6 col-md-6 col-md-offset-1 checkbox">
        	<label >
        	<input type="checkbox" id="proposition3" name="proposition3"><?php echo $erreur2; ?>
        	</label>
    	</div>
    	<div class="col-xs-6 col-md-6 col-md-offset-1 checkbox">
        	<label >
        	<input type="checkbox" id="proposition4" name="proposition4"><?php echo $erreur3; ?>
        	</label>
    	</div>
    	
    	<button class="btn btn-lg btn-primary col-md-8" type="submit" style="margin-top : 25px;">V&eacute;rifier !</button>
          
        
      </form>

    </div> <!-- /container -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </body>
</html>
