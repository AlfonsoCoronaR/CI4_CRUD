<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
	public function run()
	{
		$nombre = "admin";
		$password = password_hash("123", PASSWORD_DEFAULT);
		$type = "admin";
		$data = [
				'nombre' => $nombre,
				'password'    => $password,
				'type'	=> $type
				];

		// Using Query Builder
		$this->db->table('data')->insert($data);
	}
}
