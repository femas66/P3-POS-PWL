<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detailId = 1;
        
        // Assume prices (simplified)
        $prices = [
            1 => 2500000, 2 => 9000000, 3 => 450000,
            4 => 75000,   5 => 25000,   6 => 5000,
            7 => 80000,   8 => 250000,  9 => 350000,
            10 => 50000,  11 => 30000,  12 => 600000,
            13 => 750000, 14 => 150000, 15 => 300000,
        ];

        for ($saleId = 1; $saleId <= 10; $saleId++) {
            for ($itemCount = 1; $itemCount <= 3; $itemCount++) {
                // Pick a random item ID from 1-15
                $barangId = rand(1, 15);
                $data[] = [
                    'detail_id' => $detailId++,
                    'penjualan_id' => $saleId,
                    'barang_id' => $barangId,
                    'harga' => $prices[$barangId],
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
