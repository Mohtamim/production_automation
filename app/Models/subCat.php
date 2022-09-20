<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCat extends Model
{
    use HasFactory;
    protected $table='sub_cats';
    public $timestamps = true;

    protected $primaryKey='id';
    protected $fillable=[
        'catId',
        'subCatname',
        'title',

    ];
}
