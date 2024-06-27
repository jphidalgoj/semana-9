<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NSeed extends Seeder
{
    public function run()
    {
        $data = [
            'inv_titulo' => 'escobas',
            'inv_description'    => 'armario de escobas',
        ];

        

        // Using Query Builder
        $this->db->table('tbl_inventario')->insert($data);
    }
}