<?php namespace Course\Http\Controllers;

use Course\User;

class UsersController extends Controller {
	
	public function getIndex()
	{
		$result = \DB::table('users')
			->select('users.id', 'first_name', 'last_name', 'user_profiles.id as profile_id')
			->where('first_name', '<>', 'mario')
			->orderBy('first_name', 'asc')
			->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
			->get();
		
		dd($result);
		
		return $result;
	}
	
	public function getOrm()
	{
		$users = User::select('id', 'first_name')
			->with('profile')
			->where('first_name', '<>', 'mario')
			->orderBy('first_name', 'asc')
			->get();
		
		dd($users->toArray());
	}
}
