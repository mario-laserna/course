<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder{
	public function run()
	{
		\DB::table('users')->insert(array(
			'first_name'=>	'Mario',
			'last_name'	=>	'Laserna',
			'email'		=>	'laserna.mario@gmail.com',
			'active'	=>	true,
			'password'	=>	\Hash::make('123'),
			'created_at'=>	Carbon::now(),
			'updated_at'=>	Carbon::now()
		));	
	}
}
