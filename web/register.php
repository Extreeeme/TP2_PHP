<?php 
	$pdo = new PDO('mysql:dbname=TP2;charset=utf8;host=localhost',"root","tuning03");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$req = $pdo->query('SELECT * FROM STATUS');
	$liste_status = $req->fetchAll();
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
	<h1>INSCRIPTION CLIENT</h1>
	<form action="register_method.php" method="post">
		<input type="text" placeholder="Nom" name="firstName"/>
		<input type="text" placeholder="Prénom" name="lastName"/>
		<p>Date de Naissance</p>
		<input type="date" placeholder="Date de Naissance" name="birth_Date"/>
		<input type="text" placeholder="Adresse" name="adress"/>
		<input type="number" placeholder="zip_Code" name="zip_Code"/>
		<input type="number" placeholder="Numéro de téléphone" name="phone_Number"/>
			<select name="status">
			<?php foreach ($liste_status as $key=>$value) : ?>
				<option value="<?=$value->id?>"><?=$value->status ?></option>
			<? endforeach ?>
			</select>
		</option>
		<button type="submit">DONE</button>
	</form>
</body>
</html>