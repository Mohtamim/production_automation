<?php

namespace Database\Seeders;

use App\Models\authUser as ModelsAuthUser;
use App\Models\buyers;
use App\Models\cat;
use App\Models\unit;
use App\Models\User;
use App\Models\warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class authuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'userId'=>'1',
               'firstName'=>'Admin User',
               'lastName'=>'Admin User',
               'userName'=>'admin@gmail.com',
               'phone'=>'Admin User',
                'userType'=>'1',
                'email'=>'admin@gmail.com',
                'password'=> bcrypt('123456'),
            ],


        ];

        foreach ($user as $key => $user) {
            User::create($user);
        }

       

    }
}
