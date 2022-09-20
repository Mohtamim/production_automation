<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table='units';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'status'

    ];
}
