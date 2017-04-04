<?php 
	$id = $_GET["id"];
	$user =  App::getInstance()->getTable('Client')->findClient($id);
	$credit = App::getInstance()->getTable('Credit')->all();
?>

<h1>Liste des clients</h1>

<table>
	<thead>
		<tr>
			<td>Nom</td>
			<td>Prénom</td>
			<td>Date de naissance</td>
			<td>Adresse</td>
			<td>Numéro de téléphone</td>
			<td>Status Marital</td>
			<?php foreach ($credit as $key => $value): ?>
				<?php if ($value->clients_id == $user->id): ?>
					<td>Organisme</td>
					<td>Montant</td>
				<?php endif ?>
			<?php endforeach ?>
		</tr>
	</thead>

	<tbody>
				<tr>
					<td><?=$user->name;?></td>
					<td><?=$user->firstName;?></td>
					<td><?=$user->birthDate;?></td>
					<td><?=$user->adressComplete;?></td>
					<td><?=$user->phoneNumber;?></td>
					<td><?=$user->statut;?></td>
					<?php foreach ($credit as $key => $value): ?>
						<?php if ($value->clients_id == $user->id): ?>
							<td><?=$value->organisme?></td>
							<td><?=$value->montant?></td>
						<?php endif ?>
					<?php endforeach ?>
				</tr>	
	</tbody>
</table>