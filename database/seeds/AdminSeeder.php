<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          \App\User::create([
            'name'=>'mostafa ali',
            'email'=>'mm@gmail.com',
            'password'=>bcrypt('123456'),
            'profile_img'=>'profile_img1.jpg',
            'is_admin'=>true
        ]);
    }
}
