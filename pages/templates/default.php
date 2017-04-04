<!DOCTYPE html>
<html lang="fr">
  <head>
  	<title><?= App::getInstance()->titre; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="frameworks/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
    <nav>
      <ul>
        <li><a href="index.php?p=home">Accueil</a></li>
        <li><a href="index.php?p=Clients">Lister les clients</a></li>
        <li><a href="index.php?p=Clients.ajout">Ajouter un client</a></li>
      </ul>
    </nav>

    <div>
      <?=$content;?>
    </div>
</body>

	<!-- SCRIPTS LOADS -->
	<!-- <script type="text/javascript" hrel="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" hrel="jquery-3.2.0.min.js"></script> -->
</html>
