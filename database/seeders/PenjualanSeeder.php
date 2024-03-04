<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'user_id' => 3,
                'pembeli' => 'Cindy Vira',
                'penjualan_kode' => '01A',
                'penjualan_tanggal' => '2024-03-01 08:10:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'M Nur Ilham',
                'penjualan_kode' => '01B',
                'penjualan_tanggal' => '2024-03-01 10:16:10',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Nabila Putri',
                'penjualan_kode' => '02A',
                'penjualan_tanggal' => '2024-03-02 11:10:08',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Iman Firmansyah',
                'penjualan_kode' => '02B',
                'penjualan_tanggal' => '2024-03-02 08:10:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Amanda Fadila',
                'penjualan_kode' => '03A',
                'penjualan_tanggal' => '2024-03-03 15:14:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Cintya Nur',
                'penjualan_kode' => '03B',
                'penjualan_tanggal' => '2024-03-03 18:20:07',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Maulita Yasmine',
                'penjualan_kode' => '04A',
                'penjualan_tanggal' => '2024-03-04 09:10:03',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Firstia Aulia',
                'penjualan_kode' => '04B',
                'penjualan_tanggal' => '2024-03-04 14:05:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Slamet',
                'penjualan_kode' => '05A',
                'penjualan_tanggal' => '2024-03-05 12:35:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Isawati',
                'penjualan_kode' => '05B',
                'penjualan_tanggal' => '2024-03-05 19:21:05',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
