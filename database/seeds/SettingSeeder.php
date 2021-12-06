<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Setting::create([
            'site_name'=>'Aya ali',
            'contact_email'=>'mm@gmail.com',
            'address'=>'address example here'
        ]);
    }
}
