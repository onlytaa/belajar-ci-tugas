<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'ASUS TUF A15 FA506NF',
                'kategori' => 'Elektronik',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Sofa ACE',
                'kategori' => 'Furnitur',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'Vario 160',
                'kategori'  => 'Kendaraan',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product_category')->insert($item);
        }
    }
}
