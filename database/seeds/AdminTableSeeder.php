<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminTableSeeder extends Seeder{
	public function run()
	{
		\DB::table('users')->insert(array(
			'first_name'=>	'Mario',
			'last_name'	=>	'Laserna',
			'email'		=>	'laserna.mario@gmail.com',
			'password'	=>	\Hash::make('123'),
			'type'		=> 	'admin',
			'created_at'=>	Carbon::now(),
			'updated_at'=>	Carbon::now()
		));	
	}
}
