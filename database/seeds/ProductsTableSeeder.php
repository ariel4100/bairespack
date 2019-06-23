<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Products')->delete();
        
        \DB::table('Products')->insert(array (
            0 => 
            array (
                'id' => 1,
            'text' => '{"_method":"PUT","title_es":"14 cabezas","title_en":null,"text_es":"<p>Cantidad de Cabezales: 14 unidades de pesado.\\u0003 Construido totalmente en ACERO INOXIDABLE. Superficies de contacto pulido espejo. Sistema de doble apertura y estructura desarmable sin herramientas para f&aacute;cil limpieza.\\u0003Manejo mediante Pantalla T&aacute;ctil de cristal l&iacute;quido (LCD) para controlar las funciones b&aacute;sicas del equipo de pesado, diagn&oacute;stico e informaci&oacute;n del estado del mismo y la posibilidad de grabar hasta 99 programas<\\/p>","text_en":null,"titlec_es":null,"titlec_en":null,"caracteristica_es":null,"caracteristica_en":null,"titlet_es":null,"titlet_en":null,"tabla_es":null,"tabla_en":null,"video":"0VO9L3zMd3U","gallery":[{"image":"gallery\\/z0waEmD8kH4w6RSfAR7huRSGkbbGkgkKbVe3YIUa.png","title_es":null,"title_en":null}]}',
                'image' => '[{"image":"gallery\\/z0waEmD8kH4w6RSfAR7huRSGkbbGkgkKbVe3YIUa.png","title_es":null,"title_en":null}]',
                'order' => 'bb',
                'subfamily_id' => 1,
                'family_id' => 1,
                'created_at' => '2019-06-21 13:54:31',
                'updated_at' => '2019-06-23 01:29:59',
            ),
            1 => 
            array (
                'id' => 3,
                'text' => '{"_method":"PUT","title_es":"10 cabezas","title_en":"10 cabezas en","text_es":null,"text_en":null,"titlec_es":null,"titlec_en":null,"caracteristica_es":null,"caracteristica_en":null,"titlet_es":null,"titlet_en":null,"tabla_es":null,"tabla_en":null,"video":null,"gallery":[{"image":"gallery\\/1lIKiIiHv7BylLEnvSHQjNvdhVwraPkKifDU6aYl.png","title_es":null,"title_en":null}]}',
                'image' => '[{"image":"gallery\\/1lIKiIiHv7BylLEnvSHQjNvdhVwraPkKifDU6aYl.png","title_es":null,"title_en":null}]',
                'order' => 'aa',
                'subfamily_id' => 1,
                'family_id' => 1,
                'created_at' => '2019-06-23 00:31:21',
                'updated_at' => '2019-06-23 01:26:12',
            ),
        ));
        
        
    }
}