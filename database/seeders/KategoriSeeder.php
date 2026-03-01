<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'ELC', 'kategori_nama' => 'Electronics'],
            ['kategori_id' => 2, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Food & Beverage'],
            ['kategori_id' => 3, 'kategori_kode' => 'CLO', 'kategori_nama' => 'Clothes'],
            ['kategori_id' => 4, 'kategori_kode' => 'HOU', 'kategori_nama' => 'Household'],
            ['kategori_id' => 5, 'kategori_kode' => 'HOB', 'kategori_nama' => 'Hobby & Toys'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
