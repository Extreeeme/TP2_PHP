<?php
	$users = App::getInstance()->getTable('Client')->all();
	if(isset($_POST["organisme"])){
		App::getInstance()->getTable('Credit')->create($_POST);
		header('location: index.php?p=Clients');
		exit();
	}
?>
<h1>Ajouter un client</h1>

<form action="" method="POST">
	<select name="clients_id" required>
		<?php foreach ($users as $key => $value): ?>
			<?php if ($value->id == $_GET["id"]): ?>
				<option selected="selected" value="<?=$value->id?>"><?=$value->name?> <?=$value->firstName?></option>
			<?php else : ?>
				<option value="<?=$value->id?>"><?=$value->name?> <?=$value->firstName?></option>
			<?php endif ?>
		<?php endforeach ?>
	</select>
	<input type="text" name="organisme" placeholder="Organisme" required/>
	<input type="text" name="montant" placeholder="Montant" required/>
	<input id="swag" type="submit" value="DONE" />
</form>