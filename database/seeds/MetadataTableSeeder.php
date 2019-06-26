<?php

use Illuminate\Database\Seeder;

class MetadataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Metadata')->delete();
        
        \DB::table('Metadata')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section' => 'home',
                'text' => '{"keyword_es":"pack","keyword_en":null,"description_es":"bairespack","description_en":null}',
                'created_at' => '2019-06-26 15:15:21',
                'updated_at' => '2019-06-26 15:37:34',
            ),
            1 => 
            array (
                'id' => 3,
                'section' => 'nosotros',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:38:19',
                'updated_at' => '2019-06-26 15:38:19',
            ),
            2 => 
            array (
                'id' => 4,
                'section' => 'envasadoras',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:38:56',
                'updated_at' => '2019-06-26 15:38:56',
            ),
            3 => 
            array (
                'id' => 5,
                'section' => 'dosificadoras',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:01',
                'updated_at' => '2019-06-26 15:39:01',
            ),
            4 => 
            array (
                'id' => 6,
                'section' => 'accesorios',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:06',
                'updated_at' => '2019-06-26 15:39:06',
            ),
            5 => 
            array (
                'id' => 7,
                'section' => 'noticias',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:10',
                'updated_at' => '2019-06-26 15:39:10',
            ),
            6 => 
            array (
                'id' => 8,
                'section' => 'post venta',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:17',
                'updated_at' => '2019-06-26 15:39:17',
            ),
            7 => 
            array (
                'id' => 9,
                'section' => 'videos',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:20',
                'updated_at' => '2019-06-26 15:39:20',
            ),
            8 => 
            array (
                'id' => 10,
                'section' => 'contacto',
                'text' => '{"keyword_es":null,"keyword_en":null,"description_es":null,"description_en":null}',
                'created_at' => '2019-06-26 15:39:23',
                'updated_at' => '2019-06-26 15:39:23',
            ),
        ));
        
        
    }
}