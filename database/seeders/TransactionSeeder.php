<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'date' => now(),
                'branch_id' => 1,
                'employee_id' => 1,
                'total' => 10000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => now(),
                'branch_id' => 2,
                'employee_id' => 2,
                'total' => 4000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => now(),
                'branch_id' => 3,
                'employee_id' => 3,
                'total' => 2000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}