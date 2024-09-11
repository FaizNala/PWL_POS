<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_kode' => 'BRG001', 'kategori_id' => 1, 'barang_nama' => 'Televisi', 'harga_beli' => 1000000, 'harga_jual' => 1200000],
            ['barang_kode' => 'BRG002', 'kategori_id' => 1, 'barang_nama' => 'Kulkas', 'harga_beli' => 1500000, 'harga_jual' => 1700000],
            ['barang_kode' => 'BRG003', 'kategori_id' => 1, 'barang_nama' => 'AC', 'harga_beli' => 2000000, 'harga_jual' => 2200000],
            ['barang_kode' => 'BRG004', 'kategori_id' => 2, 'barang_nama' => 'Celana', 'harga_beli' => 100000, 'harga_jual' => 120000],
            ['barang_kode' => 'BRG005', 'kategori_id' => 2, 'barang_nama' => 'Baju', 'harga_beli' => 150000, 'harga_jual' => 170000],
            ['barang_kode' => 'BRG006', 'kategori_id' => 3, 'barang_nama' => 'Meja', 'harga_beli' => 500000, 'harga_jual' => 600000],
            ['barang_kode' => 'BRG007', 'kategori_id' => 3, 'barang_nama' => 'Kursi', 'harga_beli' => 300000, 'harga_jual' => 350000],
            ['barang_kode' => 'BRG008', 'kategori_id' => 4, 'barang_nama' => 'Roti', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_kode' => 'BRG009', 'kategori_id' => 4, 'barang_nama' => 'Biskuit', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_kode' => 'BRG010', 'kategori_id' => 5, 'barang_nama' => 'Susu', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['barang_kode' => 'BRG011', 'kategori_id' => 5, 'barang_nama' => 'Teh', 'harga_beli' => 4000, 'harga_jual' => 7000],
            ['barang_kode' => 'BRG012', 'kategori_id' => 1, 'barang_nama' => 'Smartphone', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_kode' => 'BRG013', 'kategori_id' => 3, 'barang_nama' => 'Lemari', 'harga_beli' => 1000000, 'harga_jual' => 1200000],
            ['barang_kode' => 'BRG014', 'kategori_id' => 2, 'barang_nama' => 'Sepatu', 'harga_beli' => 200000, 'harga_jual' => 250000],
            ['barang_kode' => 'BRG015', 'kategori_id' => 4, 'barang_nama' => 'Kopi', 'harga_beli' => 5000, 'harga_jual' => 8000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
