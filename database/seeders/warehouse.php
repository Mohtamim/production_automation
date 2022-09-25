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
class warehouses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $warehouses = [
            [
            'warehouseName'=>'Mirpur',
            'address'=>'Dhaka',

            ],


        ];

        foreach ($warehouses as $key => $user) {
            warehouse::create($warehouses);
        }


    }
}
