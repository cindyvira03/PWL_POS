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
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BB',
                'barang_nama' => 'Beng-Beng',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'OO',
                'barang_nama' => 'Oreo',
                'harga_beli' => 5000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'AQ',
                'barang_nama' => 'Aqua 600ml',
                'harga_beli' => 2000,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'FT',
                'barang_nama' => 'Fanta',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SS',
                'barang_nama' => 'Sunscreen Wardah Spf 30',
                'harga_beli' => 30000,
                'harga_jual' => 37500,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'FW',
                'barang_nama' => 'Facial Wash Dorksin',
                'harga_beli' => 80000,
                'harga_jual' => 85000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'TM',
                'barang_nama' => 'Taplak Meja',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'RB',
                'barang_nama' => 'Rak Baju',
                'harga_beli' => 100000,
                'harga_jual' => 110000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'KA',
                'barang_nama' => 'Kipas Angin Portable',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'LB',
                'barang_nama' => 'Lampu Belajar',
                'harga_beli' => 17000,
                'harga_jual' => 20000,
            ],

        ];
        DB::table('m_barang')->insert($data);
    }
}
