<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Landing as Model;

class LandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::firstOrCreate([
            'qr'           =>  1,
        ],[
            'redirect'     =>  true,
            'redirect_url' =>  'landingChrome',
        ]);

        Model::firstOrCreate([
            'qr'           =>  24,
        ],[
            'redirect'     =>  true,
            'redirect_url' =>  'contact',
        ]);
    }
}
