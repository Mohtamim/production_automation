<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packSize extends Model
{
    use HasFactory;
    protected $table='pack_sizes';
    protected $primaryKey='id';
    protected $fillable=[
        'title',
        'length',
        'width',
        'height',
    ];
}
