<?php 
	$pdo = new PDO('mysql:dbname=TP2;charset=utf8;host=localhost',"root","tuning03");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$req = $pdo->query('SELECT * FROM CLIENTS');
	$liste_clients = $req->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AJOUT CREDIT</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
	<a href="index.php">RETOUR</a>
	<h1>AJOUT CREDIT</h1>
	<form action="add_credit_method.php" method="post">
	<input type="text" placeholder="Organisme" name="organisme"/>
	<input type="number" placeholder="Montant" name="montant" />
			<select name="client">
				<?php foreach ($liste_clients as $key=>$value) : ?>
					<option value="<?=$value->id?>"><?=$value->firstName ?> <?=$value->lastName?></option>
				<? endforeach ?>
			</select>
		</option>
		<button type="submit">DONE</button>
	</form>
</body>
</html>