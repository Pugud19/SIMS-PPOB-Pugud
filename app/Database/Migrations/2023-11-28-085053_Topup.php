<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Topup extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nominal'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'keterangan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'default'        => 'Top Up',
            ],
            'created_at'      => [
				'type'           => 'TIMESTAMP',
			]
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('topup', TRUE);

    }

    public function down()
    {
        // menghapus tabel news
		$this->forge->dropTable('topup', TRUE);
    }
}
