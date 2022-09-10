<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouse extends Model
{
    use HasFactory;
    protected $table='warehouses';
    protected $primaryKey='id';
    protected $fillable=[
        'warehouseName',
        'address',

    ];
    public function warehouse(){
        return $this->hasMany(warehouse::class);
    }
    public function assainorder(){
        return $this->hasMany(assainedOrder::class);
    }

}
