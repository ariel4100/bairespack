<?php

use Illuminate\Database\Seeder;

class SubfamiliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Subfamilies')->delete();
        
        \DB::table('Subfamilies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => '{"title_es":"Multicabezal  de pesados","title_en":null,"image":"uploads\\/familia\\/CAcEpinaqyubHg5J3vGV23CZriDToOwKDbVl0ble.png"}',
                'image' => NULL,
                'order' => 'aa',
                'general_id' => 2,
                'family_id' => 1,
                'created_at' => '2019-06-21 12:51:22',
                'updated_at' => '2019-06-21 12:51:22',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => '{"title_es":"Balanzas lineales","title_en":"Balanzas lineales en","image":"uploads\\/familia\\/RGQZlyVePJGmUMOaHEFWR8YU3aY7A1ezhLgEyF1e.png"}',
                'image' => NULL,
                'order' => 'aa',
                'general_id' => 2,
                'family_id' => 1,
                'created_at' => '2019-06-22 23:51:13',
                'updated_at' => '2019-06-22 23:51:13',
            ),
        ));
        
        
    }
}