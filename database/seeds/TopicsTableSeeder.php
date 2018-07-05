<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 每次建立 20 個題目
        factory(\App\Topic::class, 5)->create(['exam_id' => 5]);
    }
}
