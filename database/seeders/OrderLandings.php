<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderLandings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qrs = [
            'QR15' => [
                'text' =>  'NUESTROS GERENTES REGIONALES TE CUENTAN COMO COORDINAN LOCALMENTE TODOS LOS RECURSOS PARA ALCANZAR TU PROYECTO.',
                'landing' =>  15
            ],
            'QR23' => [
                'text' =>  'Así nos demostraron
                su orgullo y vivencias
                los clientes de
                Farmaconsulting durante
                la crisis sanitaria.',
                'landing' =>  23
            ],
            'QR13' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  13
            ],
            'QR2' => [
                'text'    =>  'ME VOY A JUBILAR Y LA FARMACIA ES MI PRINCIPAL PATRIMONIO',
                'landing' => 2
            ],
            'QR3' => [
                'text'    =>  'QUERÍA QUE MIS HIJOS COGIERAN EL TESTIGO DE NUESTRA FARMACIA DE TODA LA VIDA Y DEJARLO MUY CLARO PARA SU FUTURO',
                'landing' =>  3
            ],
            'QR4' => [
                'text' =>  'QUERÍA CAMBIAR DE CIUDAD Y AMPLIAR MIS EXPECTATIVAS PROFESIONALES',
                'landing' =>  4
            ],
            'QR5' => [
                'text' =>  'BUSCABA UNA FARMACIA PARA REALIZAR MI SUEÑO PROFESIONAL',
                'landing' =>  5
            ],
            'QR6' => [
                'text' =>  'PORQUE LAS BUENAS RELACIONES SE BASAN EN LA CONFIANZA. CONÓCENOS MEJOR.',
                'landing' =>  6
            ],
            'QR7' => [
                'text' =>  'LÍDERES EN SUEÑOS CUMPLIDOS',
                'landing' =>  7
            ],
            'QR8' => [
                'text' =>  'TODO ES
                TRANQUILIDAD
                CUANDO TIENES
                ALGUIEN DE
                CONFIANZA A TU
                LADO QUE SE OCUPA
                DE TODO.
                CUENTA CON ELLO.',
                'landing' =>  8
            ],
            'QR9' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  9
            ],
            'QR10' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  10
            ],
            'QR11' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  11
            ],
            'QR12' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  '12B'
            ],
            'QR14' => [
                'text' =>  'TODO ES SEGURIDAD, EFICACIA Y ESPECIALIZACIÓN CUANDO CONFÍAS EN EL NÚMERO UNO.',
                'landing' =>  14
            ],
            'QR16' => [
                'text' =>  'EN FARMACONSULTING TRATAMOS LA VENTA DE TU FARMACIA CON EL MÁS ALTO GRADO DE CONFIDENCIALIDAD, CUIDAMOS DE TU PATRIMONIO FUTURO Y LO HACEMOS BUSCANDO TU SEGURIDAD, CON TUS OBJETIVOS COMO MÁXIMA PRIORIDAD. Y, DE PRINCIPIO A FIN, ESTAREMOS MUY CERCA DE TI EN TODO EL PROCESO',
                'landing' =>  16
            ],
            'QR17' => [
                'text' =>  'Ahora que ya conoces los pasos del proceso
                de venta de tu farmacia, ¿QUIERES SABER
                CÓMO ESTÁ EL MERCADO EN ESTE MOMENTO?
                Descárgate un breve resumen sobre el
                INFORME DE LA DEMANDA a día de hoy. ',
                'landing' =>  '17B'
            ],
            'QR18' => [
                'text' =>  'EL PROCESO DE TRANSMISIÓN FAMILIAR NO ES TAN SENCILLO COMO PUEDE PARECER. AUNQUE SE TRATE DE UNA OPERACIÓN CON ALGUIEN CERCANO, SON MUCHOS LOS ASPECTOS JURÍDICOS, FISCALES, FINANCIEROS Y ADMINISTRATIVOS E INCLUSO DE NEGOCIACIÓN A TRABAJAR PARA HACERLO DE MANERA SEGURA Y EFECTIVA.',
                'landing' =>  18
            ],
            'QR19' => [
                'text' =>  'Ahora que ya conoces los pasos del proceso de
                transmisión familiar, ¿QUIERES SABER CÓMO ESTÁ
                EL MERCADO EN ESTE MOMENTO?
                Descárgate un breve resumen del Informe de la
                Demanda a día de hoy.',
                'landing' =>  19
            ],
            'QR20' => [
                'text' =>  'LA TRANSPARENCIA EN LA COMPRA DE FARMACIA ES VITAL. ANALIZAR CADA DETALLE DE LA QUE PODRÍA SER LA TUYA ES CRUCIAL PARA GARANTIZARTE LOS INGRESOS FUTUROS Y EL CUMPLIMIENTO DE TU PROYECTO.',
                'landing' =>  20
            ],
            'QR21' => [
                'text' =>  'Ahora que ya conoces los pasos del proceso
                de compra de una farmacia, ¿QUIERES SABER QUÉ
                FARMACIAS HAY EN VENTA EN ESTE MOMENTO?
                Accede a la mayor cartera de farmacias
                a la venta de España.',
                'landing' =>  21
            ],
            'QR22' => [
                'text' =>  '¿Quieres hacer
                una visita virtual
                a nuestra nueva
                sede?',
                'landing' =>  22
            ],
            'QR24' => [
                'text' =>  'TÚ TIENES UN SUEÑO. NOSOTROS UNA MISIÓN. ¿LE DAMOS VIDA A TU SUEÑO?',
                'landing' =>  23
            ],
        ];

        $index = 0;
        foreach ($qrs as $key => $qr) {
            $landing = \App\Models\Landing::where('qr', intval(Str::remove('QR', $key)))->first();
            if ($landing) {
                $landing->sort_order = 100 - $index;
                $landing->title = $qr['text'];

                $landing->save();
            }
            $index++;
        }
    }
}
