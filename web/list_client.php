<?php 
	$pdo = new PDO('mysql:dbname=TP2;charset=utf8;host=localhost',"root","tuning03");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$req = $pdo->query('SELECT * FROM CLIENTS');
	$liste_client = $req->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>INSCRIPTION</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
	<a href="index.php">RETOUR</a>
	<h1>LISTE CLIENT</h1>
		<?php foreach ($liste_client as $key=>$value) : ?>
			<ul>
				<li><?=$value->firstName?></li>
				<li><?=$value->lastName?></li>
			</ul>
		<? endforeach ?>
</body>
</html>