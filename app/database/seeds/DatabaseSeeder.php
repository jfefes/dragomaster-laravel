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
		$this->command->info('User table seeded');

	}
}

class UserTableSeeder extends Seeder {
    public function run()
    {
			$admin = new User;
			$admin->username = 'admin';
			$admin->email = 'jfefes@gmail.com';
			$admin->password = Hash::make('admin');
			$admin->save();
		}
}
