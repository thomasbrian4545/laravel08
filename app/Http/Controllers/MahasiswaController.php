<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                'nim' => '19003036',
                'nama' => 'Sari Citra Lestari',
                'tanggal_lahir' => '2001-12-31',
                'ipk' => 3.5,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($result);
    }

    public function insertBanyak()
    {
        $result = DB::table('mahasiswas')->insert(
            [
                [
                    'nim' => '19002032',
                    'nama' => 'Rina Kumala Sari',
                    'tanggal_lahir' => '2000-06-28',
                    'ipk' => 3.4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nim' => '18012012',
                    'nama' => 'James Situmorang',
                    'tanggal_lahir' => '1999-04-02',
                    'ipk' => 2.7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
        dump($result);
    }

    public function update()
    {
        $result = DB::table('mahasiswas')
            ->where('nama', 'Sari Citra Lestari')
            ->update(
                [
                    'tanggal_lahir' => '2002-01-01',
                    'ipk' => 3.19,
                    'updated_at' => now()
                ]
            );
        dump($result);
    }

    public function updateWhere()
    {
        $result = DB::table('mahasiswas')
            ->where('ipk', '<', 3)
            ->where('nama', '<>', 'alex')
            ->update(
                [
                    'tanggal_lahir' => '2022-01-01',
                    'updated_at' => now()
                ]
            );
        dump($result);
    }

    public function updateOrInsert()
    {
        $result = DB::table('mahasiswas')
            ->updateOrInsert(
                [
                    'nim' => '19005011'
                ],
                [
                    'nama' => 'Riana Putria',
                    'tanggal_lahir' => '2000-11-23',
                    'ipk' => 2.7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        dump($result);
    }
}
