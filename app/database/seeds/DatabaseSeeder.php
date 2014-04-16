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
		$this->call('ItemTableSeeder');
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
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'john@example.com';
        $user->password = 'johnsmith';
        $user->username = 'jsmith';
        $user->first_name = 'John';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'bob@example.com';
        $user->password = 'bobsmith';
        $user->username = 'bsmith';
        $user->first_name = 'Bob';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'alex@example.com';
        $user->password = 'alexsmith';
        $user->username = 'asmith';
        $user->first_name = 'Alex';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'carl@example.com';
        $user->password = 'carlsmith';
        $user->username = 'csmith';
        $user->first_name = 'Carl';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'dave@example.com';
        $user->password = 'davesmith';
        $user->username = 'dsmith';
        $user->first_name = 'Dave';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'eric@example.com';
        $user->password = 'ericsmith';
        $user->username = 'esmith';
        $user->first_name = 'Eric';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'fred@example.com';
        $user->password = 'fredsmith';
        $user->username = 'fsmith';
        $user->first_name = 'Fred';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'gary@example.com';
        $user->password = 'garysmith';
        $user->username = 'gsmith';
        $user->first_name = 'Gary';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'hal@example.com';
        $user->password = 'halsmith';
        $user->username = 'hsmith';
        $user->first_name = 'Hal';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'issac@example.com';
        $user->password = 'issacsmith';
        $user->username = 'ismith';
        $user->first_name = 'Issac';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'ken@example.com';
        $user->password = 'kensmith';
        $user->username = 'ksmith';
        $user->first_name = 'Ken';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'larry@example.com';
        $user->password = 'larrysmith';
        $user->username = 'lsmith';
        $user->first_name = 'Larry';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'mark@example.com';
        $user->password = 'marksmith';
        $user->username = 'msmith';
        $user->first_name = 'Mark';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'nathan@example.com';
        $user->password = 'nathansmith';
        $user->username = 'nsmith';
        $user->first_name = 'Nathan';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'omar@example.com';
        $user->password = 'omarsmith';
        $user->username = 'osmith';
        $user->first_name = 'Omar';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'patrick@example.com';
        $user->password = 'patricksmith';
        $user->username = 'psmith';
        $user->first_name = 'Patrick';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'quentin@example.com';
        $user->password = 'quentinsmith';
        $user->username = 'qsmith';
        $user->first_name = 'Quentin';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'ray@example.com';
        $user->password = 'raysmith';
        $user->username = 'rsmith';
        $user->first_name = 'Ray';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'steve@example.com';
        $user->password = 'stevesmith';
        $user->username = 'ssmith';
        $user->first_name = 'Steve';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
        $user->save();

        $user = new User();
        $user->email = 'tim@example.com';
        $user->password = 'timsmith';
        $user->username = 'tsmith';
        $user->first_name = 'Tim';
        $user->last_name = 'Smith';
        $user->role = 'User';
        $user->code = str_random(60);
        $user->active = 1;
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
        $item->create_id = 1;
        $item->save();
        
        $item = new Item();
        $item->name = 'test2';
        $item->latitude = 29.7944;
        $item->longitude = -98.7315;
        $item->create_id = 21;
        $item->save();

		$item = new Item();
		$item->name = 'test3';
		$item->latitude = 29.5653;
		$item->longitude = -98.6892;
		$item->create_id = 1;
		$item->save();

        $item = new Item();
        $item->name = 'test4';
        $item->latitude = 29.6437381;
        $item->longitude = -98.4952228;
        $item->create_id = 21;
        $item->save();

        $item = new Item();
        $item->name = 'test5';
        $item->latitude = 29.7486;
        $item->longitude = -98.4133;
        $item->create_id = 1;
        $item->save();

        $item = new Item();
        $item->name = 'test6';
        $item->latitude = 29.5621191;
        $item->longitude = -98.4581396;
        $item->create_id = 21;
        $item->save();

        $item = new Item();
        $item->name = 'test7';
        $item->latitude = 29.56211910;
        $item->longitude = -98.4731;
        $item->create_id = 1;
        $item->save();
	}
}