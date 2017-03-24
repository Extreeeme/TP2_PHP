<?php 
	$erreur = [];

	if(isset($_POST['firstName'], $_POST['lastName'], $_POST['birth_Date'], $_POST['adress'], $_POST['zip_Code'], $_POST['phone_Number'], $_POST['status'])){
		if($_POST['firstName'] == '' || $_POST['firstName'] == ' '){
			$erreur[] = "Nom non valide";
		}
		if($_POST['lastName'] == '' || $_POST['lastName'] == ' '){
			$erreur[] = "Prénom non valide";
		}
		if($_POST['adress'] == '' || $_POST['adress'] == ' '){
			$erreur[] = "Adresse non valide";
		}
		if($_POST['phone_Number'] != (int)$_POST['phone_Number']){
			$erreur[] = "Numéro de téléphone non valide";
		}
		if($_POST['zip_Code'] != (int)$_POST['zip_Code']){
			$erreur[] = "Code postal non valide";
		}

		if(empty($erreur)){
			$firstName = htmlspecialchars($_POST['firstName']);
			$lastName = htmlspecialchars($_POST['lastName']);
			$adress = htmlspecialchars($_POST['adress']);
			$birth_Date = htmlspecialchars($_POST['birth_Date']);
			$status = htmlspecialchars($_POST['status']);
			$phone_Number = htmlspecialchars($_POST['phone_Number']);
			$zip_Code = htmlspecialchars($_POST['zip_Code']);
			$pdo = new PDO('mysql:dbname=TP2;host=localhost',"root","tuning03");
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$req = $pdo->prepare("SELECT * FROM CLIENTS WHERE firstName = ? AND lastName = ?");
			$req->execute([$firstName, $lastName]);
			$users = $req->fetch();
			if($users){
				$erreur = "Vous êtes déjà enregistré";
				header('location:register.php');
				exit();
			}else{
				$req2 = $pdo->prepare("
				INSERT INTO CLIENTS
				SET firstName = ?,
				lastName = ?,
				adress = ?,
				birth_Date = ?,
				status = ?,
				phone_Number = ?,
				zip_Code = ?
				");
				$req2->execute([$firstName,
				$lastName,
				$adress,
				$birth_Date,
				$status,
				$phone_Number,
				$zip_Code]);
				header('location:register.php');
				exit();
			}
		}else{
			header('location:register.php');
			exit();
		}
	}else{
		header('location:register.php');
		exit();
	}

?>