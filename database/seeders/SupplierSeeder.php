<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_kode' => 'SUP001', 'supplier_nama' => 'Indomaret', 'supplier_alamat' => 'Jakarta'],
            ['supplier_kode' => 'SUP002', 'supplier_nama' => 'Alfamart', 'supplier_alamat' => 'Bandung'],
            ['supplier_kode' => 'SUP003', 'supplier_nama' => 'Superindo', 'supplier_alamat' => 'Surabaya'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
