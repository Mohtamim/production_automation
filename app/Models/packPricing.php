<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packPricing extends Model
{
    use HasFactory;
    protected $table='pack_pricings';
    protected $primaryKey='id';
    protected $fillable=[
        'companyName',
        'packTitle',
        'packSizes',
        'price'
    ];
}
