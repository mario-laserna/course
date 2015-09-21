<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{
	public function run()
	{
		\DB::table('users')->insert(array(
			'name'		=>	'Mario',
			'email'		=>	'laserna.mario@gmail.com',
			'password'	=>	\Hash::make('123')
		));	
	}
}
