<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTbl::class);
        $this->call(StatusTbl::class);
        $this->call(ModificationTbl::class);
    }
}
