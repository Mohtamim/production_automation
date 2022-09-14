<?php

namespace App\Models;

use App\Models\warehouse;
use App\Models\warehousePayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class managerlist extends Model
{
    use HasFactory;
    protected $table='managerlists';
    protected $primaryKey='id';
    protected $fillable=[
                    'managerId',
                    'managerName',
                    'phone',
                    'userName',
                    'email',
                    'warehouseId',
    ];
    public function warehouse(){
        return $this->belongsTo(warehouse::class,'warehouseId','id');
    }
    public function warehouse_payments(){
        return $this->hasMany(warehousePayment::class);
    }
}
