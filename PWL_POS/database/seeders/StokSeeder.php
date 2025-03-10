<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2025-03-09 17:32:54',
                'stok_jumlah' => 50
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2025-03-09 17:32:54',
                'stok_jumlah' => 40
            ],
            [
                'stok_id' => 3,
                'barang_id' => 6,
                'user_id' => 2,
                'stok_tanggal' => '2025-03-09 17:32:54',
                'stok_jumlah' => 80
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
