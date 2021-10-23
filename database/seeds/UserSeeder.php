<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname' => 'Telmoro',
                'fname' => 'Jeremy',
                'address' => 'Centro, Tubigon, Bohol',
                'phone' => '090912288234',
                'email' => 'Jeremyt@yahoo.com',
                'password' => bcrypt('pashpash')
            ],
            [
                'lname' => 'Belida',
                'fname' => 'Ike',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'phone' => '09319871375',
                'email' => 'ike@yahoo.com',
                'password' => bcrypt('thenoob')
            ],
            [
                'lname' => 'Diez',
                'fname' => 'Dominic',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'phone' => '09224658184',
                'email' => 'DiezD@yahoo.com',
                'password' => bcrypt('Monarch')
            ]
        ];

        foreach($data as $user){
            \App\User::create($user);
        }
    }
}
