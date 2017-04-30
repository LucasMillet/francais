<!DOCTYPE html>
<html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Content-Type" content="text/html; utf-8" />
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

    <div class="container">

      <form class="form-signin" action="../controlleur/Initialisation.php" method="get">
        <h2 class="form-signin-heading">Entrer votre nom et pr&eacute;nom</h2>
        <div class="col-xs-6 col-md-6 col-md-offset-1">
        	<label for="nom">Nom :</label>
        	<input type="text" id="nom" name="nom" class="form-control" placeholder="" required autofocus>
    	</div>
    	<div class="col-xs-6 col-md-6 col-md-offset-1">
        	<label for="nom">Pr&eacute;nom :</label>
        	<input type="text" id="prenom" name="prenom" class="form-control" placeholder="" required>
    	</div>
        <div class="checkbox">
          
          <input type="hidden" id="vie" name="vie" value="3" />
          <input type="hidden" id="numeroQuestion" name="numeroQuestion" value="0" />
          
        </div>
        <button class="btn btn-lg btn-primary col-md-8" type="submit" style="margin-top : 25px;">C'est parti !</button>
      </form>

    </div> <!-- /container -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </body>
</html>