<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('generals')->delete();
        DB::table('generals')->insert(array(
            0 =>
                [
                    'id' => '1',
                    'text' =>  json_encode(['title_es' => 'Envasadoras', 'title_en' => 'Envasadoras_en']),
                    'order' => 'aa',
                    'padre_id' => null,
                ],
            1 =>
                [
                    'id' => '2',
                    'text' =>  json_encode(['title_es' => 'Dosificadoras', 'title_en' => 'Dosificadoras_en']),
                    'order' => 'bb',
                    'padre_id' => null,
                ],
            3 =>
                [
                    'id' => '3',
                    'text' =>  json_encode(['title_es' => 'Accesorios', 'title_en' => 'Accesorios_en']),
                    'order' => 'cc',
                    'padre_id' => null,
                ]
        ));
        
        
        
    }
}