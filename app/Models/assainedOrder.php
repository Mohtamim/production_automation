<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assainedOrder extends Model
{
    use HasFactory;
    protected $table='assained_orders';
    protected $primaryKey='id';
    protected $fillable=[
                    'mainOrderId',
                    'warehouseId',
                    'quantity',
                    'status',
    ];
}
