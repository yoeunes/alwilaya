<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Chris Sevilleja',
            'username' => 'sevilayha',
            'email' => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));
    }

}