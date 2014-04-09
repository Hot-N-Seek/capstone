<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'cameron@codeup.com';
        $user->password = 'adminPass123!';
        $user->username = 'cameronholland90';
        $user->first_name = 'Cameron';
        $user->last_name = 'Holland';
        $user->role = 'Admin';
        $user->save();
    }

}

class ItemTableSeeder extends Seeder {

	public function run() 
	{
		DB::table('items')->delete();

		$item = new Item();
		$item->name = 'test';
		$item->latitude = 29.4167;
		$item->longitude = -98.5000;
		$item->user_id = 1;
		$item->save();
	}
}