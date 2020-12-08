<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = jabatan::create([
            'nama_jabatan' => 'Manager',

         ]);
         $jabatan = jabatan::create([
            'nama_jabatan' => 'Senior Manager',

         ]);
    }
}
