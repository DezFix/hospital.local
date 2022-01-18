<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Main extends Model {

	public function getPersons() {
		$result = $this->db->row('SELECT * FROM public.persons');
		return $result;
	}

    public function addPersons ($person_name,$Diagnosis,$Phone,$Address,$dateofbirth,$Gender,$Status,$IdDoctor){
        var_dump($person_name);
        $query = new Db();
        $query->query("INSERT INTO Persons (
                     \"person_name\",
                     \"diagnosis\",
                     \"phone\",
                     \"address\",
                     \"dateofbirth\",
                     \"gender\",
                     \"status\",
                     \"id_doctor\"
                     ) VALUES (
                               '$person_name',
                               '$Diagnosis',
                               '$Phone',
                               '$Address',
                               '$dateofbirth',
                               '$Gender',
                               '$Status',
                               '$IdDoctor'
                               )");

    }

    public function qwery ($sql){
        $query = new Db();
        $query->query ($sql);
    }



}