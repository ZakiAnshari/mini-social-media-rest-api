<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('likes')->insert([
            [
                'user_id' => 1,
                'post_id' =>1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'post_id' =>2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
