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

        Model::firstOrCreate([
            'qr'           => 13
        ],
        [
            "breadcrumb"  => 'Plan de promoción',
            "content"     => '[{"layout":"video","key":"dtstNsu06VZqPKT1","attributes":{"title":"Juan Antonio Adsuar, te cuenta la importancia de dise\u00f1ar un plan de promoci\u00f3n personalizado.","subtitle":null,"video":"https:\/\/player.vimeo.com\/video\/675439516?h=39700edb3c&title=0&byline=0&portrait=0&controls=0"}}]'
        ]);

        Model::firstOrCreate([
            'qr'           => 14
        ],
        [
            "breadcrumb"  => 'Procesos y tecnología',
            "content"     => '[{"layout":"video","key":"AlPvbB5gcOvcuGx5","attributes":{"title":"Mario Librado, te cuenta nuestros rigurosos procesos de control de calidad y de la experiencia del cliente.","subtitle":null,"video":"https:\/\/player.vimeo.com\/video\/675799336?h=1ed311186b&title=0&byline=0&portrait=0&controls=0"}}]'
        ]);

        Model::firstOrCreate([
            'qr'           => 15
        ],
        [
            "breadcrumb"  => 'Gerentes regionales',
            "content"     => '[{"layout":"title","key":"J44whO2HXmfB05iX","attributes":{"title":"Nuestros gerentes regionales te cuentan c\u00f3mo coordinan localmente todos los recursos para alcanzar tu proyecto.","subtitle":null}},{"layout":"video","key":"PWIlNs8kVyL3r3Tl","attributes":{"title":"Gerente Regional Centro","subtitle":"(Madrid, Castilla La Mancha, Extremadura y sur de Castilla y Le\u00f3n)","video":"https:\/\/player.vimeo.com\/video\/698643561?h=c8227ea014&byline=0&portrait=0&controls=0"}},{"layout":"video","key":"Z7MnHQgeUpJYNoIu","attributes":{"title":"Gerente Regional Noreste","subtitle":"(Catalu\u00f1a e Islas Baleares)","video":"https:\/\/player.vimeo.com\/video\/698659189?h=df83d73938&byline=0&portrait=0&controls=0"}},{"layout":"video","key":"6lDrJrQtYPnMWlDd","attributes":{"title":"Gerente Regional Noroeste","subtitle":"(Galicia, Asturias y oeste de Castilla y Le\u00f3n)","video":"https:\/\/player.vimeo.com\/video\/698655011?h=3311d714d8&byline=0&portrait=0&controls=0"}},{"layout":"video","key":"CZv11TPcb0mmpJIR","attributes":{"title":"Gerente Regional Norte","subtitle":"(Pa\u00eds Vasco, Cantabria, Arag\u00f3n, Navarra, La Rioja y norte de Castilla y Le\u00f3n)","video":"https:\/\/player.vimeo.com\/video\/675949945?h=1815d247e2&title=0&byline=0&portrait=0&controls=0"}}]'
        ]);
    }
}
