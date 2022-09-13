<?php

namespace App\Models;

use App\Models\warehouse;
use App\Models\managerlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class warehousePayment extends Model
{
    use HasFactory;
    protected $table='warehouse_payments';
    protected $primaryKey='id';
    protected $fillable=[
        'managerName',
        'managerId',
        'email',
        'warehouseName',
        'amount',
        'date',
    ];
    public function warehouse(){
        return $this->belongsTo(warehouse::class,'warehouseName','warehouseName');
    }
    public function manager(){
        return $this->belongsTo(managerlist::class,'managerId','id');
    }
}
