<?php

namespace App\Models;

use App\Models\packaging;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class packOrder extends Model
{
    use HasFactory;
    protected $table='pack_orders';
    protected $primaryKey='id';
    public $timestamps = true;

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
    public function pack(){
        return $this->hasMany(PackageingCompany::class);
    }
    public function packSize(){
        return $this->hasMany(packSize::class);
    }


}
