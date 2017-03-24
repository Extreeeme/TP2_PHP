<?php 
	$erreur = [];

	if(isset($_POST['organisme'], $_POST['montant'])){
		if($_POST['organisme'] == '' || $_POST['organisme'] == ' '){
			$erreur[] = "Organisme non valide";
		}
		if($_POST['montant'] === 0){
			$erreur[] = "Montant non valide";
		}

		if(empty($erreur)){
			$organisme = htmlspecialchars($_POST['organisme']);
			$montant = htmlspecialchars($_POST['montant']);
			$id_client = htmlspecialchars($_POST['client']);
			$pdo = new PDO('mysql:dbname=TP2;host=localhost',"root","tuning03");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$req2 = $pdo->prepare("
			INSERT INTO CREDITS
			SET organisme = ?,
			montant = ?,
			id_client = ?
			");
			$req2->execute([$organisme,
			$montant,
			$id_client
			]);
			header('location:add_credit.php');
			exit();
		}else{
			header('location:add_credit.php');
			exit();
		}
	}else{
		header('location:add_credit.php');
		exit();
	}

?>