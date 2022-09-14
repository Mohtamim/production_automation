<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyersPayment extends Model
{
    use HasFactory;
    protected $table ='buyers_payments';
    protected $primaryKey='id';
    protected $fillable=[
        'buyerId',
        'buyerName',
        'buyerCode',
        'email',
        'country',
        'amount'
    ];
    public function buyer(){
        return $this->belongsTo(buyers::class,'buyerId','id');
    }
}
