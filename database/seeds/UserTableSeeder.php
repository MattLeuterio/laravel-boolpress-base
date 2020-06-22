<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $providerEmail = [
            'gmail.com',
            'hotmail.com',
            'libero.it'
        ];

        $users = 3;

        for ($i = 0; $i < $users; $i++) {

            $newUser = new User();
            $randNum = array_rand($providerEmail, 1);

            $newUser->name = $faker->name;
            $newUser->email = strtolower(str_replace(' ', '', $newUser->name)) . '@' . $providerEmail[$randNum];
            $newUser->password = Hash::make('mypassword');
            
            $newUser->save();

        }
    }
}
