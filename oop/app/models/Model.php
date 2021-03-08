<?php
require_once __DIR__.'/../Connection.php';

class Model {
    protected $fields = [];
    protected $table;
    protected $primaryKey = 'id';
    private $pdo;

    public function __construct() {
        $this->pdo = new Connection();
    }

    public function serializeData($data) {
        $keys = [];
        foreach($data as $key => $value) {
            $keys[':'.$key] = $value;
        }
        return $keys;
    }

    public function all() {
        return $this->pdo->getConnection()->query("select ".implode(',', $this->fields)." from ".$this->table)->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        return $this->pdo->getConnection()->query("select ".implode(',', $this->fields)." from ".$this->table." where id = ".$id)->fetchAll(PDO::FETCH_OBJ)[0];
    }

    public function search($keyword) {
        return $this->pdo->getConnection()->query("select ".implode(',', $this->fields)." from ".$this->table." where nama like '%$keyword%'")->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($data) {
        array_shift($this->fields);
        $fields = implode(',', $this->fields);
        $parameters = $this->serializeData($data);
        $keys = implode(',', array_keys($parameters));

        $sql = $this->pdo->getConnection()->prepare('insert into '.$this->table.' ('.$fields.') values('.$keys.')');
        $sql->execute($parameters);
        return true;
    }

    public function update($id, $data) {
        $statement = "";
        foreach($data as $key => $value) {
            $statement .= $key."='".$value."',";
        }
        $statement = rtrim($statement, ',');
        $sql = $this->pdo->getConnection()->prepare('update '.$this->table.' set '.$statement.' where '.$this->primaryKey.' = '.$id);
        $sql->execute();
        return true;
    }

    public function delete($id) {
        return $this->pdo->getConnection()->exec('delete from '.$this->table.' where '.$this->primaryKey.' = '.$id);
    }
}