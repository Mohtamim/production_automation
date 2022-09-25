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
class buyerss extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $buyers = [
            [
            'buyerCode'=>'220',
            'buyerName'=>'Linda',
            'email'=>'buyer@gmaiil.com',
            'phone'=>'0156',
            'country'=>'USA',
            'buyerAddress'=>'USA',
            'buyerbankAddress'=>'USA',
            'balance'=>'0',

            ],


        ];

        foreach ($buyers as $key => $user) {
            buyers::create($buyers);
        }

    }
}
