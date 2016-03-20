<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {


    public function run()
	{
		DB::table('users')->delete();
		for($i = 0; $i < 10; ++$i)
		{
			DB::table('users')->insert([
				'name' => 'Nom' . $i,
				'email' => 'email' . $i . '@blop.fr',
				'password' => bcrypt('password'),
				'is_admin' => false
			]);
		}
		DB::table('users')->insert([
                                'name' => 'alice',
                                'email' => 'alice.millour@abtela.eu',
                                'password' => bcrypt('password'),
                                'is_admin' => true
			]);
	}
}
