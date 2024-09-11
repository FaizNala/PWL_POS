<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'pembeli' => 'Ahmad', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'pembeli' => 'Hendra', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Agus', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'pembeli' => 'Rini', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'pembeli' => 'Raisa', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Amel', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'pembeli' => 'Taufiq', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'pembeli' => 'Hana', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Rehan', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'pembeli' => 'Rakha', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => now()],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
