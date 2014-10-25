<?php
use App\Models\User;
use App\Models\Photo;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        User::truncate();
        Photo::truncate();
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
        $this->call('AlbumTableSeeder');
	}

}
