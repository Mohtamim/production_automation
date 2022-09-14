<?php

namespace App\Models;


use App\Models\assainedOrder;
use App\Models\warehousePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class warehouse extends Model
{
    use HasFactory;
    protected $table='warehouses';
    protected $primaryKey='id';
    protected $fillable=[
        'warehouseName',
        'address'

    ];
    public function assainorder(){
        return $this->hasMany(assainedOrder::class);
    }
    public function managers(){
        return $this->hasMany(managerlist::class);
    }
    public function warehouse_payments(){
        return $this->hasMany(warehousePayment::class);
    }
}
