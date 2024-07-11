<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'npk' => '123456',
                'nama' => 'John Doe',
                'tanggal_lahir' => '1990-01-01',
                'jenis_kelamin' => 'Laki-laki',
                'nohp' => '08123456789',
                'jabatan' => 'Manager',
                'tmt' => '2020-01-01',
                'foto' => null,
            ],
            [
                'npk' => '654321',
                'nama' => 'Jane Smith',
                'tanggal_lahir' => '1985-05-05',
                'jenis_kelamin' => 'Perempuan',
                'nohp' => '08987654321',
                'jabatan' => 'Staff',
                'tmt' => '2018-07-01',
                'foto' => null,
            ],
        ];

        foreach ($userData as $key => $value) {
            Pegawai::create($value);
        }
    }
}
