<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Normal extends Seeder
{
	public function run()
	{
		$nombre = "normal";
		$password = password_hash("123", PASSWORD_DEFAULT);
		$type = "normal";
		$data = [
				'nombre' => $nombre,
				'password'    => $password,
				'type'	=> $type
				];

		// Using Query Builder
		$this->db->table('data')->insert($data);
	}
}
