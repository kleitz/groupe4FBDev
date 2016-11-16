<?php
    session_start();
    require_once __DIR__ . '/vendor/autoload.php';

    $fb = new Facebook\Facebook([
          'app_id' => '1175420889210427',
          'app_secret' => '19b0ba57d4538bed8974d0c677c53489',
          'default_graph_version' => 'v2.5',
        ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="public/js/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
<body>
<style>
  .btn {
    margin-top: 10px;
    margin-right: -10px;
  }
  footer{
    background-color: #637d71;
    color:blue;
    font-size:24px;
    border: 2px solid black;
  }
</style>
<div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
<<<<<<< Updated upstream
            <a class="navbar-brand" href="index.php">Concours photo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="concours.php">Concours</a></li>
              <li><a href="inscription.php">Participer au concours</a></li>
=======
            <a class="navbar-brand" href="/index.php">Concours photo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/private/concours.php">Concours</a></li>

							<!--Savoir si l'utilisateur est deje connecté  -->

							<?php if(isset($_SESSION["ACCESS_TOKEN"])) :?>

			            <a href="logout.php">Se déconnecter</a>

			            <?php

			                $fb->setDefaultAccessToken($_SESSION["ACCESS_TOKEN"]);

			                try {

			                  $response = $fb->get('/me');
			                  $userNode = $response->getGraphUser();

			                } catch(Facebook\Exceptions\FacebookResponseException $e) {
			                  // When Graph returns an error
			                  echo 'Graph returned an error: ' . $e->getMessage();
			                  exit;
			                } catch(Facebook\Exceptions\FacebookSDKException $e) {
			                  // When validation fails or other local issues
			                  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			                  exit;
			                }

			                echo 'Logged in as ' . $userNode->getName();

			            ?>




			        <?php else: ?>

			            <li><a href="/private/inscription.php">Participer au concours</a></li>

			        <?php endif;?>

>>>>>>> Stashed changes
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <h1>
        <p class="text-center">Participer au concours</p>
      </h1>
<<<<<<< Updated upstream
      <img src="http://placehold.it/1140x700" class="img-responsive">
=======
      <img src="http://placehold.it/1140x700">
>>>>>>> Stashed changes
      <button type="button" class="btn btn-primary btn-lg btn-block">Inscrivez-vous</button>


      <div class="jumbotron" style="margin-top:10px">
Nulla porttitor, nisi fermentum elementum pellentesque, nisi risus convallis arcu, vel ultrices dui libero pulvinar mi. Vivamus ac arcu at metus semper volutpat. Suspendisse tincidunt, lectus vitae eleifend varius, mi odio porta sapien, a dignissim enim libero in augue. Suspendisse quis erat a lectus ultrices mollis. Suspendisse potenti. Fusce lacus lectus, accumsan non diam quis, venenatis sodales nisl. Nulla odio tortor, semper non sapien et, imperdiet consectetur odio. Curabitur ultrices lobortis mauris id aliquam. Mauris porta tempus justo, condimentum cursus urna interdum ac. Vivamus ut magna at tellus dictum bibendum. Quisque feugiat leo eget molestie tempor. Praesent sed arcu scelerisque, tincidunt erat pellentesque, congue magna. Sed accumsan felis arcu, ut vulputate est viverra et. Ut posuere, ante ut elementum gravida, lacus erat malesuada tellus, nec aliquam urna metus non arcu.
      </div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

      <footer class="text-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">Mention Légal</div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">Condition Général d'utilisation</div>
      </footer>

</div> <!-- /container -->
</body>
</html>
