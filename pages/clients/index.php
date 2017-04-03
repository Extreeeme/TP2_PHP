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
		</tr>
	</thead>

	<tbody>
		
			<?php foreach (App::getInstance()->getTable('Client')->allClients() as $key => $value): ?>
				<tr>
					<td><?=$value->name;?></td>
					<td><?=$value->firstName;?></td>
					<td><?=$value->birthDate;?></td>
					<td><?=$value->adressComplete;?></td>
					<td><?=$value->phoneNumber;?></td>
					<td><?=$value->statut;?></td>
				</tr>
			<?php endforeach ?>
		
	</tbody>
</table>