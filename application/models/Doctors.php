<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Doctors extends Main {

    public function getPersons($sql) {
        $result = $this->row($sql);
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

    public function delete ($delete)
    {
        $sql = "DELETE FROM appoint WHERE id = '$delete'";

        $this->qwery($sql);
    }

    public function update ($doc_who, $update, $doc_id)
    {

        $sql = "UPDATE persons set $doc_who = '$update' where id = '$doc_id'" ;

        $this->qwery($sql);
        header("Location: /doctor/cards");
    }

}

