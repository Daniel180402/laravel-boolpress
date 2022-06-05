<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->email();
            //do una password che hasho prima di salvarla
            $newUser->password = Hash::make("classe55" . $i);
            $newUser->save();
        }
    }
}
