<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModificationTbl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()

    {
        \App\Models\Modification::factory()->count(5)->create(); 
    }
}
