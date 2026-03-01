<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'ELC001', 'barang_nama' => 'Smartphone', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'ELC002', 'barang_nama' => 'Laptop', 'harga_beli' => 8000000, 'harga_jual' => 9000000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'ELC003', 'barang_nama' => 'Headphones', 'harga_beli' => 300000, 'harga_jual' => 450000],
            
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'FNB001', 'barang_nama' => 'Pizza', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'FNB002', 'barang_nama' => 'Coffee', 'harga_beli' => 10000, 'harga_jual' => 25000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'FNB003', 'barang_nama' => 'Water', 'harga_beli' => 2000, 'harga_jual' => 5000],
            
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'CLO001', 'barang_nama' => 'T-Shirt', 'harga_beli' => 40000, 'harga_jual' => 80000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'CLO002', 'barang_nama' => 'Jeans', 'harga_beli' => 150000, 'harga_jual' => 250000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'CLO003', 'barang_nama' => 'Jacket', 'harga_beli' => 200000, 'harga_jual' => 350000],
            
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'HOU001', 'barang_nama' => 'Mop', 'harga_beli' => 30000, 'harga_jual' => 50000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'HOU002', 'barang_nama' => 'Broom', 'harga_beli' => 15000, 'harga_jual' => 30000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'HOU003', 'barang_nama' => 'Cabinet', 'harga_beli' => 400000, 'harga_jual' => 600000],
            
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'HOB001', 'barang_nama' => 'Lego Set', 'harga_beli' => 500000, 'harga_jual' => 750000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'HOB002', 'barang_nama' => 'Puzzle', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'HOB003', 'barang_nama' => 'Action Figure', 'harga_beli' => 200000, 'harga_jual' => 300000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
