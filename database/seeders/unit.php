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
class units extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $units = [
            [
            'name'=>'KG',
            'status'=>'1',

            ],


        ];

        foreach ($units as $key => $user) {
            unit::create($units);
        }


    }
}
