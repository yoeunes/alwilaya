<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;




class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'Chris Sevilleja',
            'email' => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));
        User::create(array(
            'name' => 'Hadadi fati',
            'email' => 'hadadi@fati.io',
            'password' => Hash::make('fatina'),
        ));
    }

}

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call(UsersTableSeeder::class);
    }
}
