<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*User::truncate();

        $admin = Admin::create([
            'username' => 'admin',
            'firstname' => 'Florence',
            'lastname' => 'Sacre',
            'email' => 'florencesacre@yahoo.fr',
            'password' => bcrypt('admin')
        ]);

        $admin->admin()->attach($admin);
*/
        factory('App\User', 10)->create();
    }
}
