<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packaging extends Model
{
    use HasFactory;
    protected $table='packagings';
    public $timestamps = true;

    protected $primaryKey='id';
}
