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
                 'warehouse_raw_materials',
                 'wages',
                 'carring_charge',
                 'treatement_deduction',
                 'is_sample_product',
                 'Details',
                 'notes',
                 'totalcost_for_warehouse',
                 'DH_total_price',
                 'FOB_cost'
    ];
    public function category(){
        return $this->hasMany(cat::class);
    }

    public function unit(){
        return $this->hasMany(unit::class);
    }
    public function mainorders(){
        return $this->hasMany(mainOrder::class);
    }
}
