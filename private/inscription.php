<?php
	session_start();
	require_once __DIR__ . '/../vendor/autoload.php';

	$fb = new Facebook\Facebook([
		  'app_id' => '1175420889210427',
		  'app_secret' => '19b0ba57d4538bed8974d0c677c53489',
		  'default_graph_version' => 'v2.5',
		]);

	$helper = $fb->getRedirectLoginHelper();
	$scope = ['email', 'user_birthday','user_photos','user_hometown','publish_actions'];
	$loginUrl = $helper->getLoginUrl('https://groupe4.fbdev.fr/private/login-callback.php', $scope);


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
<script src="../public/js/jquery-3.1.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
<body>
<style>
  .btn {
    margin-top: 10px;
    margin-right: -10px;
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

            <a class="navbar-brand" href="/index.php">Concours photo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/concours.php">Concours</a></li>
              <li><a href="/inscription.php">Participer au concours</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="connection" style="margin-top:150px">
        <a href="<?php echo $loginUrl ?>">

          <img src="https://static.events.ch/img/facebook-connect-button.png" class="img-responsive center-block" alt="">
        </a>
      </div>

    </div> <!-- /container -->
</body>
</html>
