<?php
namespace App\Table;

use Core\Table\Table;

/**
* Classe Credit
*/
class CreditTable extends Table
{
	public function allByClient($id)
	{
		return $this->query("SELECT credits.organisme,
		credits.montant
		FROM credits 
		WHERE clients_id = ?", [$id]);
	}
}