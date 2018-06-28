<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/June2018/dyHbTi5BalYV510Eav4b.jpg',
                'password' => '$2y$10$lrI/CQzcPRBkusQH06ngJOvgxrHERiW4Vf53x909IGKQLcRw29kAq',
                'remember_token' => 'VRMUwzpzqfKAeBEUbm1OuzoQ8r2yV0mcHzpfunax752v8LoWn6dZoO6VZW5Y',
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-06-27 18:16:25',
                'updated_at' => '2018-06-27 18:18:43',
            ),
        ));
        
        
    }
}