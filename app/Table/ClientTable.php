<?php
namespace App\Table;

use Core\Table\Table;

/**
* Classe Client
*/
class ClientTable extends Table
{
	public function findClient($id)
	{
		return $this->query("SELECT clients.id,
			clients.name,
			clients.firstName,
			clients.birthDate,
			clients.phoneNumber,
			clients.zipCode,
			clients.adress,
			statuts.statut
			FROM clients 
			LEFT JOIN statuts
			ON clients.maritalSituation = statuts.id
			WHERE clients.id = ?" ,[$id], true);
	}

	public function allClients()
	{
		return $this->query("SELECT 
			clients.id,
			clients.name,
			clients.firstName,
			clients.birthDate,
			clients.phoneNumber,
			clients.zipCode,
			clients.adress,
			statuts.statut
			FROM clients 
			LEFT JOIN statuts
			ON clients.maritalSituation = statuts.id");
	}
}
