<?php 
	$id = $_GET["id"];
	$user =  App::getInstance()->getTable('Client')->findClient($id);
	$credit = App::getInstance()->getTable('Credit')->allByClient($id);
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
			<?php if ($credit): ?>
				<?php foreach ($credit as $key => $value): ?>
					<td>Organisme</td>
					<td>Montant</td>
				<?php endforeach ?>
			<?php endif ?>
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
					<?php if ($credit): ?>
						<?php foreach ($credit as $key => $value): ?>
							<td><?=$value->organisme?></td>
							<td><?=$value->montant?></td>
						<?php endforeach ?>
					<?php endif ?>
					
				</tr>	
	</tbody>
</table>