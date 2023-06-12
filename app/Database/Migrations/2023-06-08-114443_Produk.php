<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'harga' => [
                'type' => 'DECIMAL',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'status' => [
                'type' => 'enum',
                'constraint' => ['bisa dijual', 'tidak bisa dijual'],
				'default' => 'bisa dijual',
            ],
        ]);

        //membuat primary key
        $this->forge->addKey('id_produk', true);

        // membuat tabel produks
        $this->forge->createTable('produks', true);
    }

    public function down()
    {
        // menghapus tabel produks
		$this->forge->dropTable('produks');
    }
}
