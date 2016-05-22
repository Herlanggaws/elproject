<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('chains')->insert([
            'name'=>'chain one',
            'about'=>'about chain one',
            'website'=>'website',
            ]);

        DB::table('chains')->insert([
            'name'=>'chain two',
            'about'=>'about chain two',
            'website'=>'website',
            ]);

        DB::table('chains')->insert([
            'name'=>'chain three',
            'about'=>'about chain two',
            'website'=>'website',
            ]);

        DB::table('chains')->insert([
            'name'=>'chain four',
            'about'=>'about chain four',
            'website'=>'website',
            ]);

        DB::table('chains')->insert([
            'name'=>'chain five',
            'about'=>'about chain five',
            'website'=>'website',
            ]);


        DB::table('customers')->insert([
        	'first_name'=>'el',
        	'last_name'=>'customer',
        	'email'=>'herlangga.wicaksono@gmail.com',
        	'password' => Hash::make('123456'),
        	]);
    }
}
