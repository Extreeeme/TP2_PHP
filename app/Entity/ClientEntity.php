<?php
namespace App\Entity;

use Core\Entity\Entity;

/**
* Classe Client
*/
class ClientEntity extends Entity
{
	public function getAdressComplete()
	{
		return $this->adress .' ['. $this->zipCode .']';
	}
}
