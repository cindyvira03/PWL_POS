<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 12:00:00',
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 12:10:00',
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 12:15:04',
                'stok_jumlah' => 35,
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 12:17:10',
                'stok_jumlah' => 25,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 3,
                'stok_tanggal' => '2024-03-04 12:19:00',
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-04 13:05:04',
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-04 13:10:40',
                'stok_jumlah' => 60,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-04 13:35:00',
                'stok_jumlah' => 12,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-04 14:03:20',
                'stok_jumlah' => 15,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-04 14:28:10',
                'stok_jumlah' => 8,
            ],

        ];
        DB::table('t_stok')->insert($data);
    }
}
