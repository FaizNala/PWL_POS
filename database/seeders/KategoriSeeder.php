<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KAT001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KAT002', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'KAT003', 'kategori_nama' => 'Perabotan'],
            ['kategori_kode' => 'KAT004', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KAT005', 'kategori_nama' => 'Minuman'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
