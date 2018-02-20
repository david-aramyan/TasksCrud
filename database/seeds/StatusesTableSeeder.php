<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
            'id' => 1,
            'name' => 'Open',
            ],
            [
                'id' => 2,
                'name' => 'In Progress',
            ],
            [
                'id' => 3,
                'name' => 'For Review',
            ],
            [
                'id' => 4,
                'name' => 'Done',
            ]
        ]);
    }
}
