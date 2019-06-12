<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'pablo',
            'username' => 'pablo',
            'email' => 'pablo@local.test',
            'password' => Hash::make('pablopablo'),
        ]);


    }
}