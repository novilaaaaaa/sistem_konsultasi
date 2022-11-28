<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'nama' => 'ade dian komala,m.psi',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'jakarta'
            ],
            [
                'nama' => 'adelina sarif,psa mpsi',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'bandung'
            ],
            [
                'nama' => 'arum septi mawarni,psi,m.psi',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'cianjur'
            ],
            [
                'nama' => 'dr.agraini,sp.kj',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'jepara'
            ],
            [
                'nama' => 'dr.agung priatmaja,sp.kj',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'cowo',
                'umur' => '20',
                'alamat' => 'pemalang'
            ],
            [
                'nama' => 'dr.agus japari,sp.kj',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'cowo',
                'umur' => '20',
                'alamat' => 'makassar'
            ],
            [
                'nama' => 'dr.ade chandra,sp.tht-kl',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'cowo',
                'umur' => '20',
                'alamat' => 'palu'
            ],
            [
                'nama' => 'dr.ade rahmi,sp.tht-kl',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'kalimantan'
            ],
            [
                'nama' => 'dr.adelien,sp.tht-kl',
                'ttl' => Carbon::now()->toDateTimeString(),
                'kelamin' => 'perempuan',
                'umur' => '20',
                'alamat' => 'jombang'
            ]
        ]);
    }
}
