<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 25/10/14
 * Time: 07:08
 */
use Faker\Factory as Faker;
use App\Models\Photo;

class AlbumTableSeeder extends \Illuminate\Database\Seeder {

    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++)
        {
            $user = Photo::create(array(
                'photo' => $faker->imageUrl(300, 200),
                'user_id' => $i,
                'status' => 1,
            ));
        }
    }


} 