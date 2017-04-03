<h1>Ajouter un client</h1>

<form action="" method="POST">
	<input type="text" name="name" placeholder="Nom" />
	<input type="text" name="firstName" placeholder="Prénom" />
	<input type="date" name="birthDate" placeholder="Date de naissance" />
	<input type="number" name="phoneNumber" placeholder="Numéro de téléphone" />
	<input type="text" name="adress" placeholder="adresse" />
	<input type="number" name="zipCode" placeholder="Code Postal" />
	<select name="maritalSituation">
		<option value="">Choisir une option</option>
		<?php foreach (App::getInstance()->getTable('Statut')->all() as $key => $value): ?>
			<option value="<?=$value->id;?>"><?=$value->statut;?></option>
		<?php endforeach ?>
	</select>
	<input type="submit" value="DONE" />
</form>