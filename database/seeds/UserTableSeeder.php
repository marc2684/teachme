<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run(){
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 'secret'
            ]);
        }

        $this->createAdmin();
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Duilio',
            'email' => 'i@correo.com',
            'password' => bcrypt('admin')
        ]);
    }

}