<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getPersons() {
		$result = $this->db->row('SELECT city, phone FROM public.persons');
		return $result;
	}




}