<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class
        ]);
        $this->call(GeneralsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(SubfamiliesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(MetadataTableSeeder::class);
    }
}
