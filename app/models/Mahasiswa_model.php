<?php

class Mahasiswa_model{
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	// private $mhs = [
	// 	[
	// 		"nama" 		=> "M.Fajar Ramadhan",
	// 		"nim"  		=> "19132301",
	// 		"email"		=> "frmdhan14@gmail.com",
	// 		"jurusan"	=> "Sistem Informasi"
	// 	],
	// 	[
	// 		"nama" 		=> "Jaka Dimas Putra",
	// 		"nim"  		=> "19132302",
	// 		"email"		=> "jaka14@gmail.com",
	// 		"jurusan"	=> "Sistem Informasi"
	// 	]
	// ];

	// method
	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	// method
	public function tambahDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
				 ('', :nama, :nim, :email, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	// method hapus data
	public function hapusDataMahasiswa($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		
		$this->db->execute();

		return $this->db->rowCount();
	}

	// // method cari
	// public function cariDataMahasiswa()
	// {
	// 	$keyword = $_POST['keyword'];
	// 	$query   = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
	// 	$this->db->query($query);
	// 	$this->db->bind('keyword', "%keyword%");
	// 	return $this->db->resultSet();
	// }
}