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
       
        $user = [
            [
            'userId'=>'2',
               'firstName'=>'Manager',
               'lastName'=>'Test',
               'userName'=>'manager@gmail.com',
               'phone'=>'017',
                'userType'=>'2',
                'email'=>'manager@gmail.com',
                'password'=> bcrypt('123456'),
            ],


        ];

        foreach ($user as $key => $user) {
            User::create($user);
        }
        $warehouse = [
            [
            'warehouseName'=>'Mrpur',
            'address'=>'Dhaka',

            ],


        ];

        foreach ($warehouse as $key => $user) {
            warehouse::create($warehouse);
        }
        $buyers = [
            [
            'buyerCode'=>'220',
            'buyerName'=>'Linda',
            'email'=>'buyer@gmaiil.com',
            'phone'=>'0156',
            'country'=>'USA',
            'balance'=>'0',

            ],


        ];

        foreach ($buyers as $key => $user) {
            buyers::create($buyers);
        }
        $units = [
            [
            'name'=>'KG',
            'status'=>'1',

            ],


        ];

        foreach ($units as $key => $user) {
            unit::create($units);
        }

        $category = [
            [
            'catName'=>'Sweet',
            'catTitle'=>'chomchom',

            ],


        ];

        foreach ($category as $key => $user) {
            cat::create($category);
        }

    }
}
