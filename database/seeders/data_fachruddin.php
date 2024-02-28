<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class data_fachruddin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
            'nim' => '000002',
            'nama' => 'Adi Inspire',
            'prodi' => 'Teknik Informatika',
            'alamat' => 'Banyuwangi',
            'no_telp' => '081331098111',
            'tgl_lahir' => '2002-02-10'

            ],
            [

                'nim' => '000001',
                'nama' => 'Lukman Vangance',
                'prodi' => 'Teknik Informatika',
                'alamat' => 'Jember',
                'no_telp' => '081331098765',
                'tgl_lahir' => '2000-01-10'
            ]
        ]);
    }
}
