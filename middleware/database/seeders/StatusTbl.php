<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTbl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()

    {
        DB::table('StatusTbl')->insert([
            [
                'statusType' => 'Approved',
                'statusColor' => 'Green',
            ],
            [
                'statusType' => 'Wrong',
                'statusColor' => 'Red',
            ],            
        ]);
    }
}
