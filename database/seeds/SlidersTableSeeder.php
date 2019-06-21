<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Sliders')->delete();
        DB::table('Sliders')->insert(array(
            0 =>
                [
                    'id' => '1',
                    'image' =>  'uploads/sliders/F76df3yZ6eEliWjvBIZ3Pul7VYqBVD9Gzt9zNVsr.png',
                    'text' => '{"text_en": null, "text_es": "<p><span style=\"color:#000000\">BAIRES PACK SISTEMAS DE EMBALAJE</span></p>\r\n\r\n<h2><span style=\"color:#000000\">Soluciones integrales</span></h2>\r\n\r\n<h2><span style=\"color:#000000\">en envasado&nbsp;</span></h2>"}',
                    'order' => 'aa',
                    'section' => 'home',
                ],
            1 =>
                [
                    'id' => '2',
                    'image' =>  'uploads/sliders/wnhlsb8AjtqDjPsmtIC5THJHTVRrZcgvg9XwSY2z.png',
                    'text' => '{"text_en": null, "text_es": "<p><span style=\"color:#ffffff\">SOMOS FABRICANTES</span></p>\r\n\r\n<h2><span style=\"color:#ffffff\">Innovaci&oacute;n y tecnolog&iacute;a</span></h2>\r\n\r\n<h2><span style=\"color:#ffffff\">de vanguardia</span></h2>"}',
                    'order' => 'aa',
                    'section' => 'nosotros',
                ],

        ));
        
        
    }
}