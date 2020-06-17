<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $users = [
            [
                'name'          => 'userOne',
                'email'         => 'userone@gmail.com',
                'password'         => bcrypt('userone'),

            ],
            [
                'name'          => 'userTwo',
                'email'         => 'usertwo@gmail.com',
                'password'         => bcrypt('usertwo'),

            ],
            [
                'name'          => 'userThree',
                'email'         => 'userthree@gmail.com',
                'password'         => bcrypt('userthree'),

            ],
            ];


            foreach($users as $user){
                User::create($user);
            }
    }
}
