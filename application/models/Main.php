<?php

namespace application\models;

use application\core\Model;
use application\lib\Db;

class Main extends Db {

    public function qweryLastId ($sql){
        $query = $this->query ($sql);
        if (!empty($this->error)){
            echo $this->error[2];
        }
        $this->id = $this->db->lastInsertId();
        return $query;
    }

    public function qwery ($sql){
        $query = $this->query ($sql);
        if (!empty($this->error)){
            echo $this->error[2];
        }
        return $query;

    }

}