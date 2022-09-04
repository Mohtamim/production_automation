<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mainOrder extends Model
{
    use HasFactory;
    protected $table='main_orders';
    protected $primaryKey='id';
    protected $fillable=[
        'productName',
        'quantity',
        'unitPrice',
        'totalPrice',
        'status',

    ];
    public function waproductsrehouse(){
        return $this->hasMany(pruduct::class);
    }
}
