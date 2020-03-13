<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $email = '@example.com';
//        $user = ['admin', 'customer'];
//
//        foreach ($user as $dashboard) {
//            $newUser = new User();
//            $newUser->username = ucfirst($dashboard);
//            $newUser->lastname = ucfirst($dashboard);
//            $newUser->firstname = ucfirst($dashboard);
//            $newUser->email =  $dashboard . $email;
//            $newUser->email_verified_at = now();
//            $newUser->password = bcrypt($dashboard);
//            $newUser->remember_token = Str::random(10);
//            $newUser->role = $dashboard;
//            $newUser->save();

            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'admin' => 1
            ]);
            User::create([
                'name' => 'Customer',
                'email' => 'customer@example.com',
                'password' => bcrypt('customer'),
                'admin' => 0
            ]);
        factory(User::class, 10)->create();
    }
}
