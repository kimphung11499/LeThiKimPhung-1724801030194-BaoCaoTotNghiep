<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(CategoryTableSeeder::class);
        $faker = Faker::create();
        foreach(range(2,100) as $index){
            DB::table('customers')->insert([
                'customer_name' => $faker->name,
                'customer_email' => $faker->unique()->safeEmail,
                // 'customer_phone' => $faker->phoneNumber,
                'customer_password' => encrypt('password'),
                'customer_address' => $faker->address,
                'created_at' => $faker->dateTimeBetween('-6 month','+1 month')
            ]);
        }
    }
}
