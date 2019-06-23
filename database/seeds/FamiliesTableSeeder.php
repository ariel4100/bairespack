<?php

use Illuminate\Database\Seeder;

class FamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Families')->delete();
        
        \DB::table('Families')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"order":"aa","title_es":"Solidos","title_en":"Solid","image":"uploads\\/familia\\/ZdD3Yu0ZTEJuzkdOEWrreqWJ0MBdrSycqlewRutA.png"}',
                'image' => NULL,
                'order' => 'aa',
                'general_id' => 2,
                'created_at' => '2019-06-21 12:02:52',
                'updated_at' => '2019-06-21 12:33:34',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"general_id":"1","order":"aa","title_es":"Verticales","title_en":null,"type_es":"Bolsa","type_en":null,"image":"uploads\\/familia\\/baJo4qgjZgjWGpV8QvnXkcxyfyEy44AmqU0Xebf9.png"}',
                'image' => NULL,
                'order' => 'aa',
                'general_id' => 1,
                'created_at' => '2019-06-21 13:29:39',
                'updated_at' => '2019-06-21 13:29:39',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => '{"general_id":"1","order":"bb","title_es":"FlowPack","title_en":"FlowPack en","type_es":"FlowPack","type_en":"FlowPack en","gallery":[{"titleg_es":null,"titleg_en":null}],"image":"uploads\\/familia\\/ZC9REaqndxfm8VKXtdvR6OaZFEOCJJGp45G25I1U.png"}',
                'image' => NULL,
                'order' => 'bb',
                'general_id' => 1,
                'created_at' => '2019-06-22 23:45:50',
                'updated_at' => '2019-06-22 23:45:50',
            ),
            3 => 
            array (
                'id' => 4,
                'text' => '{"general_id":"1","order":"cc","title_es":"Termocontraibles","title_en":"Termocontraibles en","type_es":"Pack","type_en":"Pack en","image":"uploads\\/familia\\/bLiMMSSF51J7r6mem4Za72LbaJPP6Hec4FKjUksR.png"}',
                'image' => NULL,
                'order' => 'cc',
                'general_id' => 1,
                'created_at' => '2019-06-22 23:47:26',
                'updated_at' => '2019-06-22 23:47:26',
            ),
            4 => 
            array (
                'id' => 5,
                'text' => '{"general_id":"1","order":"dd","title_es":"Pouch","title_en":"Pouch en","type_es":"Sachet","type_en":"Sachet en","image":"uploads\\/familia\\/5suCbSxusbngYFRjVWWOyuB4T01EKBJxGRg8pRrg.png"}',
                'image' => NULL,
                'order' => 'dd',
                'general_id' => 1,
                'created_at' => '2019-06-22 23:47:55',
                'updated_at' => '2019-06-22 23:47:55',
            ),
            5 => 
            array (
                'id' => 6,
                'text' => '{"general_id":"2","order":"bb","title_es":"Polvos","title_en":"Polvos en","image":"uploads\\/familia\\/n6nTEsxH2JtQ4Eot6N1aS8qCC1XdKX2lbEyg5mLw.png"}',
                'image' => NULL,
                'order' => 'bb',
                'general_id' => 2,
                'created_at' => '2019-06-22 23:49:44',
                'updated_at' => '2019-06-22 23:49:44',
            ),
        ));
        
        
    }
}