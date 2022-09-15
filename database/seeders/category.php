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
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
