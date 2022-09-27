<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class termsCondition extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table='terms_conditions';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'details'

    ];
}
