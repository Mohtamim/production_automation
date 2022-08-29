<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bankBenificiary extends Model
{
    use HasFactory;
    protected $table='bank_benificiaries';
    protected $primaryKey='id';
}
