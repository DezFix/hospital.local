<?php

namespace application\lib;



class Db {

	protected $db;
	
	public function __construct() {
		$config = require 'application/config/db.php';
		//$this->db = new PDO('pgsql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
        $this->db = pg_connect("host=" . $config['host'] . " port=5432 dbname=" . $config['name'] . " user=" . $config['user'] . " password=" . $config['password']);
	}


}