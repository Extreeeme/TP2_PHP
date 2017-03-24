<?php 
	$pdo = new PDO('mysql:dbname=TP2;charset=utf8;host=localhost',"root","tuning03");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	$req = $pdo->query('SELECT * FROM CLIENTS');
	$liste_client = $req->fetchAll();

	if(isset($_POST["client"])){
		$req = $pdo->query('SELECT CLIENTS.firstName, CLIENTS.lastName, CLIENTS.adress, CLIENTS.zip_Code, CLIENTS.birth_Date, CLIENTS.status, CLIENTS.phone_Number, STATUS.status FROM CLIENTS, STATUS WHERE STATUS.id = CLIENTS.status AND CLIENTS.id ='.$_POST["client"]);
		$user = $req->fetch();
		$req = $pdo->query('SELECT * FROM CREDITS WHERE id_client	='.$_POST["client"]);
		$credits = $req->fetchAll();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DETAILS</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
	<a href="index.php">RETOUR</a>
	<h1>DETAIL CLIENTS</h1>

	<form action="" method="post">
		<select name="client" >
		<? foreach ($liste_client as $key=>$value) :?>
			<option value="<?=$value->id?>"><?=$value->firstName?> <?=$value->lastName?></option>
		<?php endforeach ?>
		</select>
		<button type="submit">DONE</button>
	</form>
	<?php if(isset($user)) : ?>
			<ul>
				<li><strong>Nom : </strong> <?=$user->firstName?></li>
				<li><strong>Prénom : </strong> <?=$user->lastName?></li>
				<li><strong>Adresse : </strong><?=$user->adress?></li>
				<li><strong>Code Postal : </strong><?=$user->zip_Code?></li>
				<li><strong>Date de naissance : </strong><?=$user->birth_Date?></li>
				<li><strong>Status marital : </strong><?=$user->status?></li>
				<li><strong>Numéro de téléphone : </strong><?=$user->phone_Number?></li>
				<?php if($credits) :?>
					<?php foreach ($credits as $key => $value) : ?>
						<li><strong>Crédit : </strong> Organistation : <?=$value->organisme?> / Montant : <?=$value->montant?></li>
					<?php endforeach ?>
				<?php endif ?>
			</ul>
	<?php endif ?>
</body>
</html>