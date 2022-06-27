<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserNovaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
  			'email' => 'admin@farmaconsulting.es',
        ], [
		        'role'         => 'super',
		        'name'         => 'Admin',
                'password'     => Hash::make('admin1234'),
		        'lastname'     => 'admin',
		        'lastname2'    => 'admin'
            ]
        );
    }
}
