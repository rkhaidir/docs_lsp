<?php
require_once __DIR__.'/../Connection.php';

class Karyawan {
    private $pdo;

    public function __construct() {
        $this->pdo = new Connection();
    }

    public function tampil_karyawan($id = null) {
        if($id != null) {
            return $this->pdo->getConnection()->query("SELECT * FROM tb_karyawan WHERE id = '$id'")->fetchAll(PDO::FETCH_OBJ)[0];
        } else {
            return $this->pdo->getConnection()->query("SELECT * FROM tb_karyawan")->fetchAll(PDO::FETCH_OBJ);
        }
    }

    public function tambah_karyawan($nama, $jk, $alamat, $email) {
        $query = $this->pdo->getConnection()->prepare("INSERT INTO tb_karyawan(nama, jk, alamat, email) VALUES(:nama, :jk, :alamat, :email)");
        $query->bindparam(':nama', $nama);
        $query->bindparam(':jk', $jk);
        $query->bindparam(':alamat', $alamat);
        $query->bindparam(':email', $email);
        $query->execute();

        return true;
    }

    public function edit_karyawan($id, $nama, $jk, $alamat, $email) {
        $query = $this->pdo->getConnection()->prepare("UPDATE tb_karyawan SET nama=:nama, jk=:jk, alamat=:alamat, email=:email WHERE id=:id");
        $query->bindparam(':id', $id);
        $query->bindparam(':nama', $nama);
        $query->bindparam(':jk', $jk);
        $query->bindparam(':alamat', $alamat);
        $query->bindparam(':email', $email);
        $query->execute();

        return true;
    }

    public function hapus_karyawan($id) {
        $query = $this->pdo->getConnection()->prepare("DELETE FROM tb_karyawan WHERE id=:id");
        $query->execute(array(':id' => $id));
        return true;
    }
}
