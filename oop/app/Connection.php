<?php

class Connection {
    private $credentials;
    private $connection;

    public function __construct() {
        $this->credentials = require_once(__DIR__ . '/../config/databases.php');
    }

    public function getConnection() {
        $dsn = $this->credentials['mysql']['name'].':'.'host='.$this->credentials['mysql']['hostname'].';'.'dbname='.$this->credentials['mysql']['dbname'];

        try {
            $this->connection = new PDO($dsn, $this->credentials['mysql']['username'], $this->credentials['mysql']['password']);
            return $this->connection;
        } catch(PDOException $e) {
            echo "Connection Error: ".$e->getMessage();
        }
    }
}