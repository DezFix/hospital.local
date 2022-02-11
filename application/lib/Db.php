<?php

namespace application\lib;

use PDO;

class Db {

    protected $db;
    public $id;
    public $error;

    public function __construct() {
        $config = require 'application/config/db.php';
        $this->db = new PDO('pgsql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
    }

    public function query($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $stmt->bindValue(':'.$key, $val);
            }
        }


        $stmt->execute();

        //echo "<h3>$this->db->lastInsertId()</h3>";


        $this->error = $stmt->errorInfo();
        return $stmt;
    }

    public function fetch($sql, $params = []) {
        $result = $this->query($sql, $params);
        var_dump($result->fetch(PDO::FETCH_ASSOC));
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }


}