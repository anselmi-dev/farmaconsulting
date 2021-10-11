<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(['code' => 15,	'name' => 'La Coruña']);
        Province::create(['code' => 27,	'name' => 'Lugo']);
        Province::create(['code' => 32,	'name' => 'Orense']);
        Province::create(['code' => 36,	'name' => 'Pontevedra']);
        Province::create(['code' => 33,	'name' => 'Asturias']);
        Province::create(['code' => 39,	'name' => 'Cantabria']);
        Province::create(['code' => 48,	'name' => 'Vizcaya']);
        Province::create(['code' => 20,	'name' => 'Guipúzcoa']);
        Province::create(['code' => 1,	'name' => 'Álava']);
        Province::create(['code' => 31,	'name' => 'Navarra']);
        Province::create(['code' => 22,	'name' => 'Huesca']);
        Province::create(['code' => 50,	'name' => 'Zaragoza']);
        Province::create(['code' => 44,	'name' => 'Teruel']);
        Province::create(['code' => 8,	'name' => 'Barcelona']);
        Province::create(['code' => 43,	'name' => 'Tarragona']);
        Province::create(['code' => 25,	'name' => 'Lérida']);
        Province::create(['code' => 17,	'name' => 'Gerona']);
        Province::create(['code' => 24,	'name' => 'León']);
        Province::create(['code' => 34,	'name' => 'Palencia']);
        Province::create(['code' => 9,	'name' => 'Burgos']);
        Province::create(['code' => 42,	'name' => 'Soria']);
        Province::create(['code' => 40,	'name' => 'Segovia']);
        Province::create(['code' => 5,	'name' => 'Ávila']);
        Province::create(['code' => 37,	'name' => 'Salamanca']);
        Province::create(['code' => 49,	'name' => 'Zamora']);
        Province::create(['code' => 47,	'name' => 'Valladolid']);
        Province::create(['code' => 26,	'name' => 'La Rioja']);
        Province::create(['code' => 28,	'name' => 'Madrid']);
        Province::create(['code' => 19,	'name' => 'Guadalajara']);
        Province::create(['code' => 16,	'name' => 'Cuenca']);
        Province::create(['code' => 2,	'name' => 'Albacete']);
        Province::create(['code' => 13,	'name' => 'Ciudad Real']);
        Province::create(['code' => 45,	'name' => 'Toledo']);
        Province::create(['code' => 12,	'name' => 'Castellón']);
        Province::create(['code' => 46,	'name' => 'Valencia']);
        Province::create(['code' => 3,	'name' => 'Alicante']);
        Province::create(['code' => 30,	'name' => 'Murcia']);
        Province::create(['code' => 10,	'name' => 'Cáceres']);
        Province::create(['code' => 6,	'name' => 'Badajoz']);
        Province::create(['code' => 21,	'name' => 'Huelva']);
        Province::create(['code' => 41,	'name' => 'Sevilla']);
        Province::create(['code' => 14,	'name' => 'Córdoba']);
        Province::create(['code' => 23,	'name' => 'Jaén']);
        Province::create(['code' => 4,	'name' => 'Almería']);
        Province::create(['code' => 18,	'name' => 'Granada']);
        Province::create(['code' => 29,	'name' => 'Málaga']);
        Province::create(['code' => 11,	'name' => 'Cádiz']);
        Province::create(['code' => 7,	'name' => 'Baleares']);
        Province::create(['code' => 38,	'name' => 'Sta. Cruz de Tenerife']);
        Province::create(['code' => 35,	'name' => 'Las Palmas']);
        Province::create(['code' => 51,	'name' => 'Ceuta']);
        Province::create(['code' => 52,	'name' => 'Melilla']);
    }
}
