<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('activities')->insert([[
            'activity' => 'test activity for run',
            'category' => 'walking'
        ],[
            'activity' => 'test activity for cycling',
            'category' => 'cycling'
            ]]
            );
    }
}
