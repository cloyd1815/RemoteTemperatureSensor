<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserSeeder');
	}

}

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        App\User::create(['email' => 'test@test.net', 'password' => Hash::make('Password')]);
    }

}