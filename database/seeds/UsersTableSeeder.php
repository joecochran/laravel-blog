<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();
        $users = array(
        [
            'name'      =>'John Doe',
            'email'     =>'john@example.com',
            'password'  => bcrypt('password'),
            'created_at'=>'2015-02-23 22:02:16',
            'updated_at'=>'2015-02-23 22:02:16'
        ]);

        DB::table('users')->insert($users);
	}

}
