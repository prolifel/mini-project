<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('records')->insert([
                'date' => Carbon::now()->format('Y-m-d'),
                'start_time' => Carbon::now()->format('H:i:s'),
                'end_time' => Carbon::now()->addHour()->format('H:i:s'),
                'description' => 'Desc '.$i,
                'is_late' => 0,
                'user_id' => 1,
                'category_id' => $i,
            ]);
        }

        for ($i = 1; $i <= 3; $i++) {
            DB::table('records')->insert([
                'date' => Carbon::now()->format('Y-m-d'),
                'start_time' => Carbon::now()->format('H:i:s'),
                'end_time' => Carbon::now()->addHour()->format('H:i:s'),
                'description' => 'Desc '.$i,
                'is_late' => 0,
                'user_id' => 2,
                'category_id' => $i,
            ]);
        }

        for ($i = 1; $i <= 3; $i++) {
            DB::table('records')->insert([
                'date' => Carbon::now()->format('Y-m-d'),
                'start_time' => Carbon::now()->format('H:i:s'),
                'end_time' => Carbon::now()->addHour()->format('H:i:s'),
                'description' => 'Desc '.$i,
                'is_late' => 0,
                'user_id' => 3,
                'category_id' => $i,
            ]);
        }
    }
}
