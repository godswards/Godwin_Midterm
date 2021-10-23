<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Dominic Account',
                'init_invest' => 12345,
                'start_date' => '2020-08-05',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Ike Account',
                'init_invest' => 54215,
                'start_date' => '2020-03-21',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Jeremy Account	',
                'init_invest' => 16324,
                'start_date' => '2020-10-06',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
