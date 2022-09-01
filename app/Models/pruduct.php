<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pruduct extends Model
{
    use HasFactory;
    protected $table='pruducts';
    protected $primaryKey='id';
    protected $fillable=[
                 'title',
                 'category',
                 'img',
                 'unit',
                 'DH_raw_materials',
                 'supplier_raw_materials',
                 'wages',
                 'carring_charge',
                 'treatement_deduction',
                 'is_sample_product',
                 'Details',
                 'notes',
                 'totalcost_for_supplier',
                 'DH_total_price'
    ];
}