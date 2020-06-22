<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\InfoUser;
use App\User;

class InfoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {
            $newInfo = new InfoUser();

            $newInfo->user_id = $user->id;
            $newInfo->avatar = $faker->imageUrl(128,128);
            $newInfo->phone = $faker->phoneNumber();
            $newInfo->address = $faker->streetAddress();

            $newInfo->save();
        }
    }
}
