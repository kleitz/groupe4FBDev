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
            <a class="navbar-brand" href="index.php">Concours photo</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="concours.php">Concours</a></li>
              <li><a href="inscription.php">Participer au concours</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h2>Photo 1 - Nom_Participant</h2>
          <img src="http://placehold.it/1000x500">
          <p class="text-right">
            <button type="button" class="btn btn-info">Voter</button>
          </p>
        </div>
      </div>

      <div class="jumbotron">
        <div class="container">
          <h2>Photo 2 - Nom_Participant</h2>
          <img src="http://placehold.it/1000x500">
          <p class="text-right">
            <button type="button" class="btn btn-success">Vote pris en compte</button>
          </p>
        </div>
      </div>

      <div class="jumbotron">
        <div class="container">
          <h2>Photo 3 - Nom_Participant</h2>
          <img src="http://placehold.it/1000x500">
          <p class="text-right">
            <button type="button" class="btn btn-info">Voter</button>
          </p>
        </div>
      </div>

      <div class="jumbotron">
        <div class="container">
          <h2>Photo 4 - Nom_Participant</h2>
          <img src="http://placehold.it/1000x500">
          <p class="text-right">
            <button type="button" class="btn btn-info">Voter</button>
          </p>
        </div>
      </div>

    <div class="text-center">
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <li>
            <a href="" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href="">5</a></li>
          <li>
            <a href="" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    </div> <!-- /container -->
</body>
</html>
