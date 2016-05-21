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
        DB::table('customers')->insert([
        	'first_name'=>'el',
        	'last_name'=>'customer',
        	'email'=>'herlangga.wicaksono@gmail.com',
        	'password' => Hash::make('123456'),
        	]);
    }
}
