<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packOrder extends Model
{
    use HasFactory;
    protected $table='pack_orders';
    protected $primaryKey='id';
    protected $fillable=[
        'proformalInvoice',
        'company',
        'pack',
        'price',
        'quantity',
        'totalCost',
        'payAmount',
        'note',
    ];

}
