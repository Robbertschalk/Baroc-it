<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'Name' => 'Robbert',
            'Tel' => '06215489555',
            'limit' => '1',
            'Customernumber' => '2',
            'Creditworthy' => 'pending',
            'prospect' => '0',
            'Contactperson' => 'Davey'
        ]);

    }
}
