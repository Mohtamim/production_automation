<?php

namespace App\Models;

use App\Models\pruduct;
use App\Models\warehouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mainOrder extends Model
{
    use HasFactory;
    protected $table='main_orders';
    protected $primaryKey='id';
    protected $fillable=[
        'productId',
        'quantity',
        'buyerscode_id',
        'remaing_quantity',
        'unitPrice',
        'totalPrice',
        'status',

    ];
    public function waproductsrehouse(){
        return $this->hasMany(warehouse::class);
    }
    public function products(){
        return $this->belongsTo(pruduct::class, 'productId', 'id');
    }
    public function buyers(){
        return $this->belongsTo(buyers::class, 'buyerId', 'id');
    }
}
