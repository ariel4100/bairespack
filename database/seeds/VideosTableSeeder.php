<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Videos')->delete();
        
        \DB::table('Videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"title_en": "Verticales", "title_es": "Verticales"}',
                'video' => '[{"video": "9M8T4cV-C74", "title_en": null, "title_es": "Baires Pack - Envasadora Vertical EV-420  S1 + Dosificacion Doble"}, {"video": "9M8T4cV-C74", "title_en": null, "title_es": "Baires Pack Envasadora Horizontal Flowpack FP 450 S3 BBI Galleta Mascota"}, {"video": "yiCgimQwx-k", "title_en": null, "title_es": "Baires Pack Envasadora Vertical EV 420 S1 DOSIFICACION POR VIBRACIÓN"}, {"video": "a5uQMw 9M8T4cV-C74", "title_en": null, "title_es": "Baires Pack Envasadora Horizontal Flowpack FP 450 S3 BBI Tapas de Empanadas"}]',
                'order' => 'aa',
                'created_at' => '2019-06-22 18:58:22',
                'updated_at' => '2019-06-22 20:37:15',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"title_en": "Flow Pack", "title_es": "Flow Pack"}',
                'video' => '[{"video": "a5uQMwRMHcs", "title_en": null, "title_es": "luffy"}, {"video": "9M8T4cV-C74", "title_en": null, "title_es": "saitmaa"}]',
                'order' => 'bb',
                'created_at' => '2019-06-22 20:09:58',
                'updated_at' => '2019-06-22 20:09:58',
            ),
        ));
        
        
    }
}