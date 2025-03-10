<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'TRX001',
                'penjualan_tanggal' => '2025-03-09 17:32:54'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'TRX002',
                'penjualan_tanggal' => '2025-03-09 17:32:54'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Citra',
                'penjualan_kode' => 'TRX003',
                'penjualan_tanggal' => '2025-03-09 17:32:54'
            ]
            ];

        DB::table('t_penjualan')->insert($data);
    }
}
