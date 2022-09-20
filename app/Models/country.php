<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table='countries';
    protected $primaryKey='id';
    protected $fillable=[
        'countryName'

    ];

}
