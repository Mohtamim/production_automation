<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class port extends Model
{
    use HasFactory;
    protected $table='ports';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'status'

    ];
}
