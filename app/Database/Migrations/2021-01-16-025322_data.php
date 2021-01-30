<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Data extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id_nombre'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'Nombre'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '50',
					],
					'Ap_paterno'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '50',
					],
					'Ap_materno'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '50',
					],
					'password'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'type'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '100',
						'default' 		 => 'normal'
 					],	
			]);
			$this->forge->addKey('id_nombre', true);
			$this->forge->createTable('data');
	}

	public function down()
	{
			$this->forge->dropTable('data');
	}
}
