<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            [
                'id' => 1, 
                'name'=> 'Admin', 
                'email' => 'admin@taxisvip.com',
                'phone' => '00000000',
                'password' => '$2y$10$/XUWv6ZCsS44JuIs4pmS4ONfXgidbhDbAFRo64NoWTMr9Q6eHst6S',
                'access_level' => 1
            ],
            [
                'id' => 2, 
                'name'=> 'Secretaria', 
                'email' => 'manejo@taxisvip.com',
                'phone' => '00000001',
                'password' => '$2y$10$/XUWv6ZCsS44JuIs4pmS4ONfXgidbhDbAFRo64NoWTMr9Q6eHst6S',
                'access_level' => 2
            ]
        ]);

        factory(App\Vehicle::class, 10)->create();
    }
}
