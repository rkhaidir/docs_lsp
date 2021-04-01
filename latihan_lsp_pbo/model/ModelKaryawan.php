<?php

// Buat class dengan nama ModelKaryawan
class ModelKaryawan {

	/* 
		Buat Properti untuk koneksi
		$koneksi
	*/
	private $koneksi;

	/* 
		Fungsi constructor yaitu fungsi
		yang dijalankan pertama kali 
		saat class dipanggil
	*/
	public function __construct() {
		// Buat koneksi
		$this->koneksi = mysqli_connect("localhost", "root", "", "dbkreatif");
	}

	// Fungsi untuk tampil data karyawan
	public function tampilData() {
		$query = mysqli_query($this->koneksi, "SELECT * FROM tb_karyawan");

		// mengembalikan nilai
		return $query;
	}

	/* Fungsi untuk tambah data karyawan
		terdapat 4 parameter
		$id, $nama, $alamat, $email
	*/
	public function tambahData($id, $nama, $alamat, $email) {
		$query = mysqli_query($this->koneksi, "INSERT INTO tb_karyawan SET
				id_karyawan = '$id',
				nama = '$nama',
				alamat = '$alamat',
				email = '$email' 
			");

		return true;
	}

	/* Fungsi untuk menampilkan satu data
		parameternya $id
	*/
	public function baca_data_edit($id) {
		$query = mysqli_query($this->koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan = $id");

		return mysqli_fetch_array($query);
	}

	/* Fungsi untuk mengedit satu data
		parameternya $id, $nama, $alamat, $email
	*/
	public function simpan_data_edit($id, $nama, $alamat, $email) {
		$query = mysqli_query($this->koneksi, "UPDATE tb_karyawan SET
				nama = '$nama',
				alamat = '$alamat',
				email = '$email'
				WHERE id_karyawan = '$id'
			");

		return true;
	}

	/*
		Fungsi untuk menghapus satu data
		paramternya $id
	*/
	public function hapus_data($id) {
		$query = mysqli_query($this->koneksi, "DELETE FROM tb_karyawan WHERE id_karyawan = '$id'");

		return true;
	}
}