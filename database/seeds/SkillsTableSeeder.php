<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 2,
                'order' => 2,
                'skill' => 'Laravel',
                'created_at' => '2018-06-28 05:52:52',
                'updated_at' => '2018-06-28 05:52:57',
            ),
        ));
        
        
    }
}