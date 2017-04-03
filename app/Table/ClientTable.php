<?php
namespace App\Table;

use Core\Table\Table;

/**
* Classe Client
*/
class ClientTable extends Table
{
	public function allClients()
	{
		return $this->query("SELECT 
			clients.name,
			clients.firstName,
			clients.birthDate,
			clients.phoneNumber,
			clients.zipCode,
			clients.adress,
			statutsMaritals.statut
			FROM clients 
			LEFT JOIN statutsMaritals
			ON clients.maritalSituation = statutsMaritals.id");
	}
}
