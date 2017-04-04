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
					<td>
						<form action="index.php?p=Clients.details" method="GET">
							<input type="hidden" name="p" value="Clients.details" />
							<button type="submit" name="id" value="<?=$value->id?>" >Détails</button>
						</form>
					</td>

					<td>
						<form action="index.php?p=Clients.credit" method="GET">
							<input type="hidden" name="p" value="Clients.credit" />
							<button type="submit" name="id" value="<?=$value->id?>" >Crédits</button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		
	</tbody>
</table>