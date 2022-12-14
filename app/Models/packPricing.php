<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packPricing extends Model
{
    use HasFactory;
    protected $table='pack_pricings';
    protected $primaryKey='id';
    public $timestamps = true;

    protected $fillable=[
        'companyName',
        'packTitle',
        'packSizes',
        'price'
    ];
    public function companyName(){
        return $this->hasMany(PackageingCompany::class);
    }
    public function packsize(){
        return $this->hasMany(packSize::class);
    }
}
