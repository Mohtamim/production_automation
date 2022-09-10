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
                    'productId',
                    'warehouseId',
                    'quantity',
                    'status',
    ];
    public function products(){
        return $this->belongsTo(pruduct::class,'productId','id');
    }
    public function warehouses(){
        return $this->belongsTo(warehouse::class,'warehouseId','id');
    }
    public function mainorder(){
        return $this->hasMany(mainOrder::class,'id','mainOrderId');
    }
}
