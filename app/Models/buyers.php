<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyers extends Model
{
    use HasFactory;
    protected $table ='buyers';
    protected $primaryKey='id';
    protected $fillable=[
        'buyerCode',
        'buyerName',
        'email',
        'phone',
        'img',
        'country',
        'balance'
    ];
    public function buyersPayment()
    {
        return $this->hasMany(buyersPayment::class);
    }
    public function mainOrder()
    {
        return $this->hasMany(mainOrder::class);
    }
}
