<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25/10/14
 * Time: 07:08
 */
use Faker\Factory as Faker;
use App\Models\User;

class UserTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++)
        {
            $user = User::create(array(
                'email' => $faker->email,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'hashname' => $faker->md5,
                'identifier' => $faker->md5,
                'is_active' => 1,
                'pin' => $faker->randomDigitNotNull,
                'salt' => $faker->randomDigitNotNull,
                'status' => 1,
                'dob' => $faker->date()
            ));
        }
    }


} 