<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Main extends Model {

	public function getPersons() {
		$result = $this->db->row('SELECT * FROM public.persons');
		return $result;
	}

    public function addPersons ($FirstName,$LastName,$Diagnosis,$Phone,$Address,$DateOfBirth,$Gender,$Status,$IdDoctor){
        var_dump($FirstName);
        $query = new Db();
        $query->query("INSERT INTO Persons (
                     \"firstname\",
                     \"lastname\",
                     \"diagnosis\",
                     \"phone\",
                     \"address\",
                     \"dateofbirth\",
                     \"gender\",
                     \"status\",
                     \"id_doctor\"
                     ) VALUES (
                               '$FirstName',
                               '$LastName',
                               '$Diagnosis',
                               '$Phone',
                               '$Address',
                               '$DateOfBirth',
                               '$Gender',
                               '$Status',
                               '$IdDoctor'
                               )");

    }



}