<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'X PPLG 1']);
        Kelas::create(['nama_kelas' => 'X PPLG 2']);
        Kelas::create(['nama_kelas' => 'XI PPLG 1']);
        Kelas::create(['nama_kelas' => 'XI PPLG 2']);
    }
}
